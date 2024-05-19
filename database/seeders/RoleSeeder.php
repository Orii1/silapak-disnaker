<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id_role' => '1',
                'nama' => 'Admin',
            ],
            [
                'id_role' => '2',
                'nama' => 'Mediator HI',
            ],
            [
                'id_role' => '3',
                'nama' => 'Kepala Bidang',
            ],
            [
                'id_role' => '4',
                'nama' => 'Perusahaan',
            ],
        ]);
    }
}
