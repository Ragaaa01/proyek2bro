<?php
use App\Http\Controllers\homeController;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\profilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//praktikum 9
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/resmhs', [mahasiswaController::class, 'index']);
Route::get('/profil', [profilController::class, 'index']);
Route::get('/prodi', [prodiController::class, 'index']);
//------------------

Route::get('/', function () {
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});
Route::get('/home', function () {
    $title = "WebSaya.Com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.Com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});
//Route::get('/home', [homeController::class, 'index'] );
//Route::get('/mhs', [mhsController::class, 'index'] );
//Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'] );
//Route::get('mhs/show', [mhsController::class, 'show'] );
Route::get('/prd', [prdController::class, 'index'] );


