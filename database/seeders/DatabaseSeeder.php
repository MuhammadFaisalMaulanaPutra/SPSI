<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('mahasiswas')->insert([
            'NIM'      => '152011513025',
            'nama_mhs' => 'Pascal',
            'alamat_mhs'=> 'Madiun',
            'gender'    => 'L',
            'no_hp'     => '086666666666',
            'email'     => 'pascal-2020@gmail.com'
        ]);

        DB::table('users')->insert([
            'username' => '152011513025',
            'nama_user'=> 'Pascal',
            'password' =>  Hash::make('password'),
        ]);
    }
}
