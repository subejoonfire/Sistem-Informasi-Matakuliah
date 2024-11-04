<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Model;

class Dospem extends Model
{
    protected $primaryKey = 'iddospem';
    protected $fillable = ['namadosen', 'idjabatan', 'idmatakuliah'];
    protected $casts = [
        'idmatakuliah' => 'array',
    ];

    public function jabatan()
    {

        return $this->belongsTo(Jabatan::class, 'idjabatan');
    }
    public function getMatakuliahAttribute()
    {
        $matakuliahIds = is_array($this->idmatakuliah) ? $this->idmatakuliah : json_decode($this->idmatakuliah, true);

        if (!$matakuliahIds) {
            return [];
        }

        return Matakuliah::whereIn('idmatakuliah', $matakuliahIds)->pluck('namamatakuliah')->toArray();
    }
}
