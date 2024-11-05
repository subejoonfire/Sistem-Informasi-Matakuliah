<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(JabatansSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MatakuliahsSeeder::class);
        $this->call(DospemsSeeder::class);
        $this->call(MahasiswasSeeder::class);
    }
}

class JabatansSeeder extends Seeder
{
    public function run()
    {
        DB::table('jabatans')->insert([
            ['id' => 1, 'jabatan' => 'Dosen', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'jabatan' => 'Kepala Program Studi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'jabatan' => 'Dosen Tamu', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'jabatan' => 'Asisten Dosen', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'jabatan' => 'Pengajar Praktikum', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'jabatan' => 'Koordinator Dosen', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'jabatan' => 'Dosen Senior', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

class KelasSeeder extends Seeder
{
    public function run()
    {
        DB::table('kelas')->insert([
            ['id' => 1, 'kodekelas' => '1A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'kodekelas' => '1B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'kodekelas' => '1C', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'kodekelas' => '1D', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'kodekelas' => '2A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'kodekelas' => '2B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'kodekelas' => '2C', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'kodekelas' => '3A', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

class MatakuliahsSeeder extends Seeder
{
    public function run()
    {
        DB::table('matakuliahs')->insert([
            ['id' => 1, 'namamatakuliah' => '"Data Mining"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'namamatakuliah' => '"Pengenalan Basis Data"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'namamatakuliah' => '"Interaksi Manusia Komputer"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'namamatakuliah' => '"Pemrograman Website"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'namamatakuliah' => '"Rekayasa Perangkat Lunak"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'namamatakuliah' => '"IT Proyek"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'namamatakuliah' => '"Pemrograman Visual"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'namamatakuliah' => '"Sistem Informasi"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'namamatakuliah' => '"Jaringan Komputer"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'namamatakuliah' => '"Keamanan Informasi"', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

class DospemsSeeder extends Seeder
{
    public function run()
    {
        DB::table('dospems')->insert([
            ['id' => 1, 'idjabatan' => 1, 'idmatkul' => json_encode(["3", "6", "1", "5"]), 'namadosen' => 'Herfia Romadhoni', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'idjabatan' => 2, 'idmatkul' => json_encode(["1", "2"]), 'namadosen' => 'BIlly Sabela', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'idjabatan' => 1, 'idmatkul' => json_encode(["2", "4", "5"]), 'namadosen' => 'Nina Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'idjabatan' => 2, 'idmatkul' => json_encode(["1", "3", "6"]), 'namadosen' => 'Danu Kurniawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'idjabatan' => 1, 'idmatkul' => json_encode(["2", "5", "7"]), 'namadosen' => 'Sari Dewi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'idjabatan' => 3, 'idmatkul' => json_encode(["8", "9"]), 'namadosen' => 'Eko Prabowo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

class MahasiswasSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['id' => 1, 'idkelas' => 2, 'iddospem' => 2, 'namamahasiswa' => 'Ahlul Nazar', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'idkelas' => 1, 'iddospem' => 1, 'namamahasiswa' => 'Budi Santoso', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'idkelas' => 3, 'iddospem' => 3, 'namamahasiswa' => 'Cynthia Wulan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'idkelas' => 4, 'iddospem' => 4, 'namamahasiswa' => 'Dewi Kinasih', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'idkelas' => 5, 'iddospem' => 5, 'namamahasiswa' => 'Fahri Amrullah', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'idkelas' => 6, 'iddospem' => 6, 'namamahasiswa' => 'Gina Indira', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'idkelas' => 7, 'iddospem' => 1, 'namamahasiswa' => 'Hendra Saputra', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'idkelas' => 2, 'iddospem' => 2, 'namamahasiswa' => 'Intan Permatasari', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
