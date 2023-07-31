<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'id_user' => 1, 
            'id_guru' => 1, 
            'ulasan' => 'Sangat membantu',
            'rating' => 5,
        ]);
    }
}
