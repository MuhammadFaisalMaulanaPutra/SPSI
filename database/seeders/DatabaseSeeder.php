<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Permohonan;

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

        DB::table('users')->insert([
            [
                'username' => '123456789012345678',
                'nama_user'=> 'Kps01',
                'password' =>  Hash::make('password'),
            ]
        ]);

        DB::table('kps')->insert([
            'id'           => '123456789012345678',
            'nama_kps'      => 'Kps01',
            'email_kps'     => 'kps01@kps.unair.ac.id',
            'alamat_kps'    => 'Jalan Tes, Testing',
            'hp_kps'        => '081234567890',
            'th_masuk_kps'  => '2010',
            'jk_kps'        => 'L'
        ]);

        Permohonan::factory(50)->create();

        
    }
}
