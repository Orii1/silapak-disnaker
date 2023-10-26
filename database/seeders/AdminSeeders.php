<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'address' => 'Jalan Soekarno Hatta - Trikora',
            'owner' => 'Dinas Koperasi Usaha Kecil Menengah dan Tenaga Kerja Banjarbaru',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),

        ]);
    }
}
