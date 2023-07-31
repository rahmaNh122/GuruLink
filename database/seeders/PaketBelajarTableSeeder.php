<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketBelajarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket_belajar')->insert([
            'nama_paket' => 'Paket Safir',
            'deskripsi_paket' => 'Paket belajar ini berlangsung selama 1 kali seminggu dan les private akan dilakukan selama 1 bulan',
            'harga' => 500000,
        ]);

        DB::table('paket_belajar')->insert([
            'nama_paket' => 'Paket Titanium',
            'deskripsi_paket' => 'Paket belajar ini berlangsung selama 3 kali seminggu dan les private akan dilakukan selama 1 bulan',
            'harga' => 750000,
        ]);

        DB::table('paket_belajar')->insert([
            'nama_paket' => 'Paket Diamond',
            'deskripsi_paket' => 'Paket belajar ini berlangsung selama 5 kali seminggu dan les private akan dilakukan selama 1 bulan',
            'harga' => 750000,
        ]);
    }
}
