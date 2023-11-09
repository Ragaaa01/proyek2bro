<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index(){
        $profil = "Profil";
        $title = "Profil WebSaya.Com";
        $slug = "profil";
        $dataPrf = $this->iniProfil();
        return view('konten.profil', compact('profil', 'title', 'slug', "dataPrf"));
    }

    public function iniProfil(){
        $dataPrf = array(
            [
                'Nama' => 'Nama : RAGATONA BESLY',
                'Kelas' => 'Kelas : D3TI2A',
                'Prodi' => 'Prodi : D3 TEKNIK INFORMATIKA',
                'Alamat' => 'Alamat : Margalaksana 2',
            ]
        );
        return $dataPrf;
    }
}
