<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use Filament\Forms;
use Filament\Tables;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\CreateAction;
use App\Filament\Resources\NilaiResource;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\AssociateAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\DissociateAction;
use Filament\Tables\Actions\DissociateBulkAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ViewNilai extends ManageRelatedRecords
{
    protected static string $resource = NilaiResource::class;

    protected static string $relationship = 'mahasiswa';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Mahasiswa';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')->label('ID Mahasiswa'),
                TextColumn::make('mahasiswa.namamahasiswa')->label('ID Mahasiswa'),
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                Tables\Actions\AssociateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DissociateAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DissociateBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
