<?php

namespace App\Models;

use App\Models\Jabatan;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dospem extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['namadosen', 'idjabatan', 'idmatkul'];
    protected $casts = [
        'idmatkul' => 'json',
    ];
    public function jabatan()
    {

        return $this->belongsTo(Jabatan::class, 'idjabatan');
    }
    public function getMatakuliahAttribute()
    {
        $matakuliahIds = is_array($this->idmatkul) ? $this->idmatkul : json_decode($this->idmatkul, true);

        if (!$matakuliahIds) {
            return [];
        }

        return Matakuliah::whereIn('matakuliahs.id', $matakuliahIds)->pluck('namamatakuliah')->toArray();
    }
    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class, 'dospems', 'idmatkul', 'id');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id', 'iddospem');
    }
}
