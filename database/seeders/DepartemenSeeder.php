<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departemen = [
            ['nama_departemen' => 'Pengurus Harian'],
            ['nama_departemen' => 'Devisi Organisasi'],
            ['nama_departemen' => 'Devisi Kaderisasi'],
            ['nama_departemen' => 'Devisi Dakwah']
        ];

        DB::table('departemen')->insert($departemen);
    }
}
