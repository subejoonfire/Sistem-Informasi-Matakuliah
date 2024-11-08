<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Dospem;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['namamahasiswa', 'idkelas', 'iddospem'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'idkelas', 'id');
    }

    public function dospem()
    {
        return $this->belongsTo(Dospem::class, 'iddospem', 'id');
    }
}
