<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KelasSeeder::class,
            UpdateMahasiswaSeeder::class,
            MataKuliahSeeder::class,

        ]);
        // Mahasiswa::factory(30)->create();
        Mahasiswa::create([
            'nim' => '2041720052',
            'nama' => 'Ahmad Dani Maulana',
            'kelas_id' => 5,
            'jurusan' => 'Teknik Informatika',
            'foto' => 'dani.jpeg',
        ]);
        $this->call([

            nilaiSeeder::class,
        ]);
    }
}
