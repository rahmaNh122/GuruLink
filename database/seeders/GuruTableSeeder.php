<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert([
            'id_user' => 1,
            'id_spesialisasi' => 1,
            'pengalaman_mengajar' => 5,
            'deskripsi' => 'Pengajar profesional dengan 5 tahun pengalaman.',
            'lokasi' => 'Jakarta',
            'gambar' => 'path/to/image.jpg',
        ]);

        
    }
}
