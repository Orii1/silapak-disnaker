<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_perusahaan')->insert([
            [
                'id_status_perusahaan' => '1',
                'nama_status' => 'Kantor Pusat',
            ], [
                'id_status_perusahaan' => '2',
                'nama_status' => 'Kantor Cabang',
            ]
        ]);
    }
}
