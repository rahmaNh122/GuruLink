<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpesialisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spesialisasi')->insert([
            'nama_spesialisasi' => 'Front End Developer',
        ]);

        DB::table('spesialisasi')->insert([
            'nama_spesialisasi' => 'Back End Developer',
        ]);

    }
}
