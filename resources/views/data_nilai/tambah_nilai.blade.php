@extends('template')

@section('content')
	<h3>Data Nilai Siswa</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/eas/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                ID
            </div>
            <div class="col-8">
                <input type="text" name="id" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                NRP
            </div>
            <div class="col-8">
                <input type="text" name="nrp" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Nilai Angka
            </div>
            <div class="col-8">
                <input type="text" name="nilai" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                SKS
            </div>
            <div class="col-8">
                <input type="text" name="sks" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" value="Simpan" class="btn btn-success">
	</form>
@endsection
