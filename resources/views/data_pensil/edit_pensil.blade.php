@extends('template')

@section('content')
	<h3>Edit Pensil</h3>

	<a href="/pensil"> Kembali</a>

	<br/>
	<br/>

    @foreach($pensil as $p)
	<form action="/pensil/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="row">
            <div class="col-3">
                Merk Pensil
            </div>
            <div class="col-8">
                <input type="text" name="merkpensil" required="required" class="form-control" value="{{ $p->merkpensil }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Harga Pensil
            </div>
            <div class="col-8">
                <input type="number" name="hargapensil" required="required" class="form-control" value="{{ $p->hargapensil }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="number" name="tersedia" required="required" class="form-control" value="{{ $p->tersedia }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                Berat Pensil
            </div>
            <div class="col-8">
                <input type="text" name="berat" required="required" class="form-control" value="{{ $p->berat }}">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
    @endforeach
@endsection
