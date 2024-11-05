<?php

namespace App\Models;

use App\Models\Dospem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jabatan extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['jabatan'];

    public function dosen()
    {
        return $this->hasMany(Dospem::class, 'id');
    }
}
