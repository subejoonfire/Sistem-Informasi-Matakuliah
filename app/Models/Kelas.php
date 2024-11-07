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
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id', 'idkelas');
    }
}
