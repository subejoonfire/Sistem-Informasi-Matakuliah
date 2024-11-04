<?php

namespace App\Filament\Widgets;

use App\Models\Dospem;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class GeneralCounter extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Dosen', Dospem::count())
                ->description('Jumlah dosen tetap'),
            Stat::make('Jumlah Mahasiswa', Mahasiswa::count())
                ->description('Jumlah mahasiswa tetap'),
            Stat::make('Jumlah Mata Kuliah', Matakuliah::count())
                ->description('Jumlah mata kuliah tetap'),
        ];
    }
}
