<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index(){
        $prodi = "Prodi";
        $title = "Prodi WebSaya.Com";
        $slug = "prodi";
        $dataPrd = $this->iniProdi();
        return view('konten.prodi', compact('prodi', 'title', 'slug', "dataPrd"));
    }

    public function iniProdi(){
        $dataPrd = array(
            [
                'no' => '1',
                'nama' => 'Adit',
                'prodi' => 'D3 TEKNIK INFORMATIKA',
            ],
            [
                'no' => '2',
                'nama' => 'Adinda',
                'prodi' => 'D3 TEKNIK INFORMATIKA',
            ],
            [
                'no' => '3',
                'nama' => 'Wiranto',
                'prodi' => 'D3 TEKNIK MESIN',
            ]
        );
        return $dataPrd;
    }

}
