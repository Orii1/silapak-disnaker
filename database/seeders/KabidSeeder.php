<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KabidSeeder extends Seeder
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
                'id' => '4',
                'email' => 'kabidhi@koperasi.com',
                'password' => Hash::make('kabidhi'),
                'status_akun' => 'active',
                'id_role' => '3'
            ]
        ]);
    }
}
