<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $mhs = "Nadia";
            $title = "Mahasiswa WebSaya.Com";
            $slug = "mahasiswa";
            $dataMhs = $this->show();
            return view('resmhs.index',
            compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = array(
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
