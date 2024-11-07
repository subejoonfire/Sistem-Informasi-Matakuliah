<?php

namespace App\Filament\Resources\DospemResource\Pages;

use App\Filament\Resources\DospemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDospem extends CreateRecord
{
    protected static string $resource = DospemResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
