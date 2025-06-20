<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    //
    public function index()
	{
		$nilai = DB::table('nilai')->get();
    	// mengirim data pegawai ke view index
		return view('data_nilai/index6',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('data_nilai/tambah_nilai');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		DB::table('nilai')->insert([
			'id' => $request->id,
            'normorinduksiswa' => $request->nrp,
			'nilaiangka' => $request->nilai,
			'sks' => $request->sks
		]);
		return redirect('/eas');

	}
}
