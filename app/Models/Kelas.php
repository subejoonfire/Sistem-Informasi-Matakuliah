<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $primaryKey = 'idkelas';
    protected $fillable = ['kodekelas'];
    public function mahasiswacount(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'idkelas');
    }
    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'idkelas');
    }
}
