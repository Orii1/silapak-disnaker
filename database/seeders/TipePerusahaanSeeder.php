<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipePerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_perusahaan')->insert([
            [
                'id_tipe_perusahaan' => '1',
                'nama_tipe' => 'Mikro',
            ], [
                'id_tipe_perusahaan' => '2',
                'nama_tipe' => 'Kecil',
            ], [
                'id_tipe_perusahaan' => '3',
                'nama_tipe' => 'Menengah',
            ], [
                'id_tipe_perusahaan' => '4',
                'nama_tipe' => 'Besar',
            ]
        ]);
    }
}
