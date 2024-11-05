<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $primaryKey = 'idnilai';
    protected $fillable = [
        'idmatakuliah',
        'idmahasiswa',
        'nilai',
    ];
}
