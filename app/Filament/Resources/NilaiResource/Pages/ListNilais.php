<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use App\Models\Nilai;
use Filament\Actions;
use App\Filament\Resources\NilaiResource;
use Filament\Resources\Pages\ListRecords;

class ListNilais extends ListRecords
{
    protected static string $resource = NilaiResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('download')
                ->url(route('pdf.nilai.download'))
                ->openUrlInNewTab()
                ->icon('heroicon-o-document')
                ->label('Download PDF')
        ];
    }
}
