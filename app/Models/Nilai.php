<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Symfony\Component\VarDumper\VarDumper;

class Nilai extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'idmahasiswa',
        'data_mining',
        'pengenalan_basis_data',
        'interaksi_manusia_komputer',
        'pemrograman_website',
        'rekayasa_perangkat_lunak',
        'it_proyek',
        'pemrograman_visual',
        'sistem_informasi',
        'jaringan_komputer',
        'keamanan_informasi',
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id');
    }
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'mahasiswas', 'id', 'id')
            ->withPivot('id');
    }
}
