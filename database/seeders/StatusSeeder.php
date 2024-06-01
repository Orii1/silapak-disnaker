<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            [
                'id_status' => '1',
                'nama_status' => 'Menunggu Konfirmasi',
            ], [
                'id_status' => '2',
                'nama_status' => 'Diproses',
            ],[
                'id_status' => '3',
                'nama_status' => 'Diterima',
            ],[
                'id_status' => '4',
                'nama_status' => 'Ditolak',
            ]
        ]);
    }
}
