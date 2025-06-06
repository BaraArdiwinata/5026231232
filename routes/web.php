<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
// import java.io;


// System.out.println();
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('js1', [Link::class, 'js1']);

Route::get('bootstrap1', [Link::class, 'bootstrap1']);

Route::get('js2', [Link::class, 'js2']);

Route::get('linktree', [Link::class, 'linktree']);

Route::get('pertama', [Link::class, 'pertama']);

Route::get('PR4', [Link::class, 'PR4']);

Route::get('template1', [Link::class, 'template1']);

Route::get('Latihan', [Link::class, 'Latihan']);

Route::get('frontend', [Link::class, 'frontend']);

Route::get('ets', [Link::class, 'ets']);

Route::get('dosen', [Link::class, 'index']);

// Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index2']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
