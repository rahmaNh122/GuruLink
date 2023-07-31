<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin01',
            'password' => Hash::make('admin'), 
            'alamat' => 'Malang',
            'no_telepon' => '087665449872',
            'role' => 'Admin',
            'id_jeniskelamin' => 1,
        ]);
    }
}
