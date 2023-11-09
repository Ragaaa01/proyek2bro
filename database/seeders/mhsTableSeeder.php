<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert(array(
            ['nim' => '22030001',
            'nama' => 'Nadia',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030002',
            'nama' => 'Zahra',
            'prodi' => 'D3TI',
            'angkatan' => '2022']
        ));
    }
}
