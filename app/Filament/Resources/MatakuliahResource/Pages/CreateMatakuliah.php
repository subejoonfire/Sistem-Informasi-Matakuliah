<?php

namespace App\Filament\Resources\MatakuliahResource\Pages;

use App\Filament\Resources\MatakuliahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMatakuliah extends CreateRecord
{
    protected static string $resource = MatakuliahResource::class;
    protected static ?string $title = 'Tambah Mata Kuliah';
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
