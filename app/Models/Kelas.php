<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['kodekelas'];
    public function mahasiswacount(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'id');
    }
    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'id');
    }
}
