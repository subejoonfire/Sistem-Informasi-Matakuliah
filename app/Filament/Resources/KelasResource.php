<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kelas;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\KelasResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KelasResource\Pages\EditKelas;
use App\Filament\Resources\KelasResource\Pages\ListKelas;
use App\Filament\Resources\KelasResource\RelationManagers;
use App\Filament\Resources\KelasResource\Pages\CreateKelas;

class KelasResource extends Resource
{
    protected static ?string $model = Kelas::class;

    protected static ?string $navigationLabel = 'Kelas';
    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $modelLabel = 'Kelas';
    protected static ?string $navigationGroup = 'Kemahasiswaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('kodekelas')
                        ->label('Kode Kelas')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kodekelas')->label('Kode Kelas'),
                TextColumn::make('mahasiswacount_count')
                    ->counts('mahasiswacount')
                    ->label('Jumlah Mahasiswa'),
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
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('mahasiswa')
                    ->getStateUsing(function ($record) {
                        return $record->mahasiswa && $record->mahasiswa->isNotEmpty()
                            ? $record->mahasiswa->map(fn($mahasiswa) => "• {$mahasiswa->namamhs}")->implode("<br>")
                            : 'Tidak ada mahasiswa';
                    })
                    ->html()
                    ->label('Daftar Mahasiswa'),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelas::route('/'),
            'create' => Pages\CreateKelas::route('/create'),
            'edit' => Pages\EditKelas::route('/{record}/edit'),
        ];
    }
}
