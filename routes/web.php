<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
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
