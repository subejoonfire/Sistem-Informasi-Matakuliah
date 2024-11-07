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
            ['id' => 8, 'jabatan' => 'Dosen Penelitian', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'jabatan' => 'Dosen Pembimbing', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'jabatan' => 'Dosen Magang', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'jabatan' => 'Dosen Praktikum', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'jabatan' => 'Dosen Khusus', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'jabatan' => 'Dosen Utama', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'jabatan' => 'Dosen Pembimbing Skripsi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'jabatan' => 'Dosen Pembimbing Tugas Akhir', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'jabatan' => 'Dosen Pengganti', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'jabatan' => 'Dosen Ahli', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'jabatan' => 'Dosen Bimbingan Karir', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'jabatan' => 'Dosen Evaluasi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'jabatan' => 'Dosen Pengembangan', 'created_at' => now(), 'updated_at' => now()],
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
            ['id' => 4, 'kodekelas' => '2A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'kodekelas' => '2B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'kodekelas' => '2C', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'kodekelas' => '3A', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'kodekelas' => '3B', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'kodekelas' => '3C', 'created_at' => now(), 'updated_at' => now()],
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
            ['id' => 11, 'namamatakuliah' => '"Analisis Algoritma"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'namamatakuliah' => '"Sistem Operasi"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'namamatakuliah' => '"Kecerdasan Buatan"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'namamatakuliah' => '"Pengembangan Aplikasi Mobile"', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'namamatakuliah' => '"Cloud Computing"', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

class DospemsSeeder extends Seeder
{
    public function run()
    {
        DB::table('dospems')->insert([
            ['id' => 1, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["3", "6", "1 ", "5"]), 'namadosen' => 'Herfia Romadhoni', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["1", "2", "4"]), 'namadosen' => 'BIlly Sabela', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["2", "4", "5", "7"]), 'namadosen' => 'Nina Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["1", "3", "6", "8"]), 'namadosen' => 'Danu Kurniawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["2", "5", "7", "9"]), 'namadosen' => 'Sari Dewi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["8", "9", "10"]), 'namadosen' => 'Eko Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["1", "2", "3"]), 'namadosen' => 'Jaka Permadi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["4", "5", "6"]), 'namadosen' => 'Rina Lestari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["7", "8", "9"]), 'namadosen' => 'Fajar Setiawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["10", "1", "2"]), 'namadosen' => 'Lina Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["3", "4", "5"]), 'namadosen' => 'Agus Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["6", "7", "8"]), 'namadosen' => 'Dewi Kinasih', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["9", "10", "1"]), 'namadosen' => 'Budi Santoso', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["2", "3", "4"]), 'namadosen' => 'Cynthia Wulan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["5", "6", "7"]), 'namadosen' => 'Hendra Saputra', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["8", "9", "10"]), 'namadosen' => 'Intan Permatasari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["1", "2", "3"]), 'namadosen' => 'Eko Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["4", "5", "6"]), 'namadosen' => 'Rina Lestari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["7", "8", "9"]), 'namadosen' => 'Fajar Setiawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'idjabatan' => rand(1, 20), 'idmatkul' => json_encode(["10", "1", "2"]), 'namadosen' => 'Lina Sari', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
class MahasiswasSeeder extends Seeder
{
    public function run()
    {
        $mahasiswas = [
            ['id' => 1, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Ahlul Nazar', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Budi Santoso', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Cynthia Wulan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Dewi Kinasih', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Fahri Amrullah', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Gina Indira', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Hendra Saputra', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Intan Permatasari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Joko Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Kirana Dewi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Lutfi Rahman', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Maya Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Nadia Anisa', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Oka Setiawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Putri Ayu', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Qori Siti', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Rizky Adi ', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Siti Nurhaliza', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Toni Hartono', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Umi Salamah', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Vina Lestari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Wahyu Prasetyo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Xena Putri', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 24, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Yusuf Hidayat', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 25, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Zahra Aulia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 26, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Aditya Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 27, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Bunga Melati', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 28, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Cahya Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 29, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Dimas Prasetyo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 30, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Eka Putri', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 31, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Fira Rahma', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 32, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Guntur Adi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 33, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Hani Lestari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 34, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Iwan Setiawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 35, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Jasmine R ani', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 36, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Khalid Rahman', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 37, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Lina Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 38, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Mira Anisa', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 39, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Niko Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 40, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Olivia Sari', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 41, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Pandu Setiawan', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 42, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Qori Aulia', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 43, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Rizal Hidayat', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 44, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Sari Dewi', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 45, 'idkelas' => rand(1, 9), 'iddospem' => 3, 'namamahasiswa' => 'Tari Melati', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 46, 'idkelas' => rand(1, 9), 'iddospem' => 4, 'namamahasiswa' => 'Umar Faruq', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 47, 'idkelas' => rand(1, 9), 'iddospem' => 5, 'namamahasiswa' => 'Vina Rahma', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 48, 'idkelas' => rand(1, 9), 'iddospem' => 6, 'namamahasiswa' => 'Wira Aditya', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 49, 'idkelas' => rand(1, 9), 'iddospem' => 1, 'namamahasiswa' => 'Xander Prabowo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 50, 'idkelas' => rand(1, 9), 'iddospem' => 2, 'namamahasiswa' => 'Yani Lestari', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('mahasiswas')->insert($mahasiswas);
    }
}
