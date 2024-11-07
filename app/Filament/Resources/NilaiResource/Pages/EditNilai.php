<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use Filament\Actions;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NilaiResource;

class EditNilai extends EditRecord
{
    protected static string $resource = NilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('idmahasiswa')
                    ->label('Mahasiswa')
                    ->relationship('mahasiswa', 'namamahasiswa')
                    ->columnSpan(4)
                    ->disabled()
                    ->required(),
                TextInput::make('data_mining')
                    ->label('Data Mining')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('pengenalan_basis_data')
                    ->label('Pengenalan Basis Data')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('interaksi_manusia_komputer')
                    ->label('Interaksi Manusia Komputer')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('pemrograman_website')
                    ->label('Pemrograman Website')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('rekayasa_perangkat_lunak')
                    ->label('Rekayasa Perangkat Lunak')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('it_proyek')
                    ->label('IT Proyek')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('pemrograman_visual')
                    ->label('Pemrograman Visual')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('sistem_informasi')
                    ->label('Sistem Informasi')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('jaringan_komputer')
                    ->label('Jaringan Komputer')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),

                TextInput::make('keamanan_informasi')
                    ->label('Keamanan Informasi')
                    ->numeric()
                    ->rules(['max:100'])
                    ->default(0),
            ]);
    }
}
