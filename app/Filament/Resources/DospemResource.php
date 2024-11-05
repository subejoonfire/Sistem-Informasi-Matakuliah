<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Dospem;
use App\Models\Jabatan;
use Filament\Forms\Form;
use App\Models\Matakuliah;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\DospemResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DospemResource\Pages\EditDospem;
use App\Filament\Resources\DospemResource\RelationManagers;
use App\Filament\Resources\DospemResource\Pages\ListDospems;
use App\Filament\Resources\DospemResource\Pages\CreateDospem;

class DospemResource extends Resource
{
    protected static ?string $model = Dospem::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Dosen Pembimbing';
    protected static ?string $modelLabel = 'Dosen Pembimbing';
    protected static ?string $navigationGroup = 'Dosen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('namadosen')
                        ->label('Nama Dosen Pembimbing')
                        ->required()->columnSpan(3),
                    Select::make('id')->options(Jabatan::all()->mapWithKeys(function ($jabatan) {
                        return [
                            NULL => 'Tidak ada jabatan',
                            $jabatan->id => $jabatan->jabatan
                        ];
                    }))->label('Jabatan')
                        ->columnSpan(3),
                    CheckboxList::make('id')->options(Matakuliah::all()->mapWithKeys(function ($matakuliah) {
                        return [
                            $matakuliah->id => $matakuliah->namamatakuliah
                        ];
                    }))->label('Mata Kuliah')
                        ->columnSpan(3),
                    // CheckboxList::make('id')
                    //     ->relationship('matakuliah', 'namamatakuliah')
                    //     ->label('Mata Kuliah')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('namadosen')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Dosen'),
                TextColumn::make('jabatan.jabatan')
                    ->searchable()
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        return $record->id ? $record->jabatan->jabatan : 'Tidak ada jabatan';
                    })
                    ->label('Nama Jabatan'),
                TextColumn::make('matakuliah')
                    ->label('Mata Kuliah')
                    ->getStateUsing(function ($record) {
                        return $record->matakuliah
                            ? collect($record->matakuliah)->map(fn($name) => "• $name")->implode("<br>")
                            : 'Tidak ada mata kuliah';
                    })
                    ->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDospems::route('/'),
            'create' => Pages\CreateDospem::route('/create'),
            'view' => Pages\ViewDospem::route('/{record}/view'),
            'edit' => Pages\EditDospem::route('/{record}/edit'),
        ];
    }
}
