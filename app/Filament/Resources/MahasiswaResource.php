<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use \App\Models\Dospem;
use \App\Models\Kelas;
use Filament\Forms\Form;
use App\Models\Mahasiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MahasiswaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MahasiswaResource\RelationManagers;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationLabel = 'Mahasiswa';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('idkelas')
                        ->options(Kelas::all()->mapWithKeys(function ($kelas) {
                            return [
                                $kelas->idkelas => $kelas->kodekelas
                            ];
                        }))
                        ->label('Kelas'),
                    Select::make('iddospem')
                        ->name('iddospem')
                        ->options(Dospem::all()->mapWithKeys(function ($dospem) {
                            return [
                                $dospem->iddospem => $dospem->namadosen
                            ];
                        }))
                        ->label('Nama Dosen Pembimbing'),
                    TextInput::make('namamhs')
                        ->required()
                        ->columnSpan(2)
                        ->label('Nama Mahasiswa')
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('idmhs')
                    ->label('ID Mahasiswa')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('namamhs')
                    ->label('Nama Mahasiswa')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('kelas.kodekelas')
                    ->label('Kelas')
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        return $record->idkelas ? $record->kelas->kodekelas : 'Tidak ada kelas';
                    })
                    ->searchable(),
                TextColumn::make('dospem.namadosen')
                    ->label('Dosen Pembimbing')
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        return $record->iddospem ? $record->dospem->namadosen    : 'Tidak ada dosen pembimbing';
                    })
                    ->searchable(),
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
