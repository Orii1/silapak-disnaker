<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '2',
                'email' => 'mediatorhi01@koperasi.com',
                'password' => Hash::make('mediatorhi01'),
                'status_akun' => 'active',
                'id_role' => '2'
            ], [
                'id' => '3',
                'email' => 'mediatorhi02@koperasi.com',
                'password' => Hash::make('mediatorhi02'),
                'status_akun' => 'active',
                'id_role' => '2'
            ]
        ]);
    }
}
