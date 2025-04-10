<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Budi Santoso',
            'nim' => '12345678',
            'jurusan' => 'Teknik Informatika',
        ]);

        Mahasiswa::create([
            'nama' => 'Siti Aminah',
            'nim' => '87654321',
            'jurusan' => 'Sistem Informasi',
        ]);
    }
}
