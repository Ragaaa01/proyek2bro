<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prd')->insert(array(
            ['prodi' => 'D3TEKNIK INFORMATIKA'],
            ['prodi' => 'D4 REKAYASA PERANGKAT LUNAK'],
            ['prodi' => 'D4 SISTEM INFORMASI KOTA CERDAS']
        ));
    }
}
