<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
        // $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('data_keranjang/index5',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah keranjangbelanja
	public function tambah()
	{

		// memanggil view tambah
		return view('data_keranjang/tambah_keranjang');

	}

	// method untuk insert data ke table keranjangbelanja
	public function store(Request $request)
	{
		// insert data ke table keranjangbelanja
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjang');

	}

	// method untuk hapus data keranjangbelanja
	public function hapus($id)
	{
		// menghapus data keranjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjang');
	}
}
