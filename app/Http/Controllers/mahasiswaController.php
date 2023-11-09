<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index(){
        $mhs = "Nadia";
        $title = "Mahasiswa WebSaya.Com";
        $slug = "mahasiswa";
        $dataMhs = $this->dataMahasiswa();
        return view('konten.mahasiswa', compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    public function dataMahasiswa(){
        $dataMhs = array(
            [
                'nim' => '2022030001',
                'nama' => 'Adeeva',
                'prodi' => 'TI'
            ],
            [
                'nim' => '2022030002',
                'nama' => 'Nadia',
                'prodi' => 'TI'
            ],
            [
                'nim' => '2022030003',
                'nama' => 'Zahra',
                'prodi' => 'TI'
            ]
        );
        return $dataMhs;
    }
}

