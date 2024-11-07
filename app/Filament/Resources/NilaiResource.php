<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Nilai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use App\Filament\Resources\NilaiResource\Pages;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Nilai Mahasiswa';
    protected static ?string $navigationGroup = 'Kemahasiswaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('idmahasiswa')
                    ->label('Mahasiswa')
                    ->relationship('mahasiswa', 'namamahasiswa')
                    ->columnSpan(4)
                    ->unique()
                    ->required(),
                TextInput::make('data_mining')
                    ->label('Data Mining')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('pengenalan_basis_data')
                    ->label('Pengenalan Basis Data')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('interaksi_manusia_komputer')
                    ->label('Interaksi Manusia Komputer')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('pemrograman_website')
                    ->label('Pemrograman Website')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('rekayasa_perangkat_lunak')
                    ->label('Rekayasa Perangkat Lunak')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('it_proyek')
                    ->label('IT Proyek')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('pemrograman_visual')
                    ->label('Pemrograman Visual')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('sistem_informasi')
                    ->label('Sistem Informasi')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('jaringan_komputer')
                    ->label('Jaringan Komputer')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),

                TextInput::make('keamanan_informasi')
                    ->label('Keamanan Informasi')
                    ->numeric()
                    ->rules(['max:3'])
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mahasiswa.namamahasiswa')->label('Nama Mahasiswa')->searchable(),
                TextColumn::make('mahasiswa.kelas.kodekelas')->label('Kelas')->searchable(),
                TextColumn::make('data_mining')->label('Data Mining'),
                TextColumn::make('pengenalan_basis_data')->label('Pengenalan Basis Data'),
                TextColumn::make('interaksi_manusia_komputer')->label('Interaksi Manusia Komputer'),
                TextColumn::make('pemrograman_website')->label('Pemrograman Website'),
                TextColumn::make('rekayasa_perangkat_lunak')->label('Rekayasa Perangkat Lunak'),
                TextColumn::make('it_proyek')->label('IT Proyek'),
                TextColumn::make('pemrograman_visual')->label('Pemrograman Visual'),
                TextColumn::make('sistem_informasi')->label('Sistem Informasi'),
                TextColumn::make('jaringan_komputer')->label('Jaringan Komputer'),
                TextColumn::make('keamanan_informasi')->label('Keamanan Informasi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
