@extends('template')

@section('content')
	<h3>Data Pensil</h3>

	<a href="/pensil" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pensil/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk Pensil
            </div>
            <div class="col-8">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga Pensil
            </div>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="number" name="tersedia" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Berat Pensil
            </div>
            <div class="col-8">
                <input type="text" name="berat" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
