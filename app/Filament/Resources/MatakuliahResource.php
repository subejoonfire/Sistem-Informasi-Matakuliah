<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Matakuliah;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MatakuliahResource\Pages;
use App\Filament\Resources\MatakuliahResource\RelationManagers;

class MatakuliahResource extends Resource
{
    protected static ?string $model = Matakuliah::class;

    protected static ?string $navigationLabel = 'Mata Kuliah';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                CARD::make()->schema([
                    TextInput::make('namamatakuliah')
                        ->label('Nama Mata Kuliah')
                        ->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('idmatakuliah')
                    ->label('ID Mata Kuliah'),
                TextColumn::make('namamatakuliah')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Mata Kuliah'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListMatakuliahs::route('/'),
            // 'create' => Pages\CreateMatakuliah::route('/create'),
            // 'edit' => Pages\EditMatakuliah::route('/{record}/edit'),
        ];
    }
}
