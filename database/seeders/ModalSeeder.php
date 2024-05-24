<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modal')->insert([
            [
                'id_modal' => '1',
                'nama_modal' => 'Perorangan',
            ], [
                'id_modal' => '2',
                'nama_modal' => 'Swasta Nasional',
            ], [
                'id_modal' => '3',
                'nama_modal' => 'BUMN',
            ], [
                'id_modal' => '4',
                'nama_modal' => 'BUMD',
            ],[
                'id_modal' => '5',
                'nama_modal' => 'PMA',
            ],[
                'id_modal' => '6',
                'nama_modal' => 'PMDN',
            ]
        ]);
    }
}
