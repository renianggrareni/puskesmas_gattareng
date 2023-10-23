<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\PenpasController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\ListDesaController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/demografi', function () {
    return view('demografi');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/prestasi', function () {
    return view('prestasi');
});

Route::get('/inovasi', function () {
    return view('inovasi');
});

Route::get('/hakdankewajiban', function () {
    return view('hakdankewajiban');
});

Route::get('/jadwal1', function () {
    return view('jadwal1');
});

Route::get('/jadwal2', function () {
    return view('jadwal2');
});

Route::get('/jadwal3', function () {
    return view('jadwal3');
});

Route::get('/jadwal4', function () {
    return view('jadwal4');
});

Route::get('/jadwal5', function () {
    return view('jadwal5');
});

Route::get('/jadwal6', function () {
    return view('jadwal6');
});

Route::get('/jadwal7', function () {
    return view('jadwal7');
});

Route::get('/karyawan1', function () {
    return view('karyawan1');
});

Route::get('/karyawan2', function () {
    return view('karyawan2');
});

Route::get('/karyawan3', function () {
    return view('karyawan3');
});

Route::get('/karyawan4', function () {
    return view('karyawan4');
});

Route::get('/karyawan5', function () {
    return view('karyawan5');
});

Route::get('/karyawan6', function () {
    return view('karyawan6');
});

Route::get('/karyawan7', function () {
    return view('karyawan7');
});

Route::get('/prosedur1', function () {
    return view('prosedur1');
});

Route::get('/prosedur2', function () {
    return view('prosedur2');
});

Route::get('/prosedur3', function () {
    return view('prosedur3');
});

Route::get('/prosedur4', function () {
    return view('prosedur4');
});

Route::get('/prosedur5', function () {
    return view('prosedur5');
});

Route::get('/prosedur6', function () {
    return view('prosedur6');
});

Route::get('/prosedur7', function () {
    return view('prosedur7');
});

Route::get('/sop1', function () {
    return view('sop1');
});

Route::get('/sop2', function () {
    return view('sop2');
});

Route::get('/sop3', function () {
    return view('sop3');
});

Route::get('/sop4', function () {
    return view('sop4');
});

Route::get('/sop5', function () {
    return view('sop5');
});

Route::get('/sop6', function () {
    return view('sop6');
});

Route::get('/sop7', function () {
    return view('sop7');
});

Route::get('/datakaryawan', function () {
    return view('datakaryawan');
});

Route::get('/promkes', function () {
    return view('promkes');
});

Route::get('/kesling', function () {
    return view('kesling');
});

Route::get('/p2p', function () {
    return view('p2p');
});

Route::get('/kia', function () {
    return view('kia');
});

Route::get('/pgm', function () {
    return view('pgm');
});

Route::get('/kgm', function () {
    return view('kgm');
});

Route::get('/kestrad', function () {
    return view('kestrad');
});

Route::get('/perkesmas', function () {
    return view('perkesmas');
});

Route::get('/kesorga', function () {
    return view('kesorga');
});

Route::get('/jiwaindera', function () {
    return view('jiwaindera');
});

Route::get('/uks', function () {
    return view('uks');
});

Route::get('/ukgs', function () {
    return view('ukgs');
});

Route::get('/penpas', function () {
    return view('penpas');
});

Route::get('/informasikesehatan', function () {
    return view('informasikesehatan');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/back/home', function () {
    return view('back.home');
});

Route::get('admin/DaftarPenpas',[PenpasController::class,'index'])->name('admin.DaftarPenpas');

Route::prefix('admin')->group(function(){
    Route::get('/',[Admin\Auth\loginController::class,'loginform']);
    Route::get('/login',[Admin\Auth\loginController::class,'loginform'])->name('admin.login');
    Route::post('/login',[Admin\Auth\loginController::class,'login'])->name('admin.login');
    Route::get('/home',[Admin\HomeController::class,'index'])->name('admin.home');
    Route::get('/logout',[Admin\Auth\loginController::class,'logout'])->name('admin.logout');
});

Route::get('/penpas', [PenpasController::class, 'penpas']);
Route::get('admin/penpas', [PenpasController::class, 'index'])->name('admin.penpas');
Route::post('/admin/tambahdata', [PenpasController::class, 'index'])->name('admin.tambahdata');
Route::post('/insertdata', [PenpasController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}', [PenpasController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [PenpasController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [PenpasController::class, 'delete'])->name('delete');

Route::get('/admin/editpenpas/{id}', [PenpasController::class, 'editpenpas'])->name('admin.editpenpas');
// Rute untuk menampilkan halaman tambah data
Route::get('/admin/tambahdata', [PenpasController::class, 'tambahdata'])->name('admin.tambahdata');

// Rute untuk menangani penambahan data pasien
Route::post('/admin/tambahdata', [PenpasController::class, 'insertdata'])->name('admin.tambahdata');

Route::get('admin/desa', [DesaController::class, 'index'])->name('admin.desa');
Route::post('admin/listdesa', [ListDesaController::class, 'index'])->name('admin.listdesa');

Auth::routes();

Route::get('/back/home', [HomeController::class, 'index'])->name('back.home');

