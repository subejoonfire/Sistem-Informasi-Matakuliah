<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matakuliah extends Model
{
    protected $primaryKey = 'idmatakuliah';
    protected $fillable = ['namamatakuliah'];
    protected $casts = [
        'namamatakuliah' => 'array',
    ];
}
