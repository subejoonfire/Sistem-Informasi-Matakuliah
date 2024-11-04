<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $primaryKey = 'idmatakuliah';
    protected $fillable = ['namamatakuliah'];
    protected $casts = [
        'namamatakuliah' => 'array',
    ];
    public function getPengajarAttribute()
    {
        return $this->hasMany(Dospem::class, 'idmatakuliah');
    }
}
