<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {
    protected $primaryKey = 'idkelas';
    protected $fillable = [ 'kodekelas' ];
}
