<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pensil
		// $pensil = DB::table('pensil')->get();
        $pensil = DB::table('pensil')->paginate(10);
    	// mengirim data pensil ke view index
		return view('data_pensil/index3',['pensil' => $pensil]);

	}

	// method untuk menampilkan view form tambah pensil
	public function tambah()
	{

		// memanggil view tambah
		return view('data_pensil/tambah_pensil');

	}

	// method untuk insert data ke table pensil
	public function store(Request $request)
	{
		// insert data ke table pensil
		DB::table('pensil')->insert([
			'merkpensil' => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pensil
		return redirect('/pensil');

	}

	// method untuk edit data pensil
	public function edit($id)
	{
		// mengambil data pensil berdasarkan id yang dipilih
		$pensil = DB::table('pensil')->where('ID',$id)->get();
		// passing data pensil yang didapat ke view edit_pensil.blade.php
		return view('data_pensil/edit_pensil',['pensil' => $pensil]);

	}

	// update data pensil
	public function update(Request $request)
	{
		// update data pensil
		DB::table('pensil')->where('ID',$request->id)->update([
			'merkpensil' => $request->merkpensil,
            'hargapensil' => $request->hargapensil,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pensil
		return redirect('/pensil');
	}

	// method untuk hapus data pensil
	public function hapus($id)
	{
		// menghapus data pensil berdasarkan id yang dipilih
		DB::table('pensil')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pensil
		return redirect('/pensil');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pensil sesuai pencarian data
		$pensil = DB::table('pensil')
		->where('merkpensil','like',"%".$cari."%")
		->paginate();

    		// mengirim data pensil ke view index
		return view('data_pensil/index3',['pensil' => $pensil], ['cari' => $cari]);

	}
}
