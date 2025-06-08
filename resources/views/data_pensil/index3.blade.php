@extends('template')

@section('content')
	<h3>Data Pensil</h3>
	<a href="/pensil/tambah" class="btn btn-primary"> + Tambah Pensil Baru</a>
	<p>Cari Data Pensil :</p>
	<form action="/pensil/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pensil .."  value="$cari">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

    <br/>
	<table class="table table-striped">
		<tr>
			<th>Merk Pensil</th>
			<th>Harga Pensil</th>
			<th>Ketersediaan</th>
			<th>Berat Pensil</th>
            <th>Opsi</th>
		</tr>
		@foreach($pensil as $p)
        <tr>
            <td>{{ $p->merkpensil }}</td>
            <td>{{ $p->hargapensil }}</td>
            <td>{{ $p->tersedia }}</td>
            <td>{{ $p->berat }}</td>
            <td>
                <a href="/pensil/edit/{{$p->ID}}" class="btn btn-success">Edit</a>
                <a href="/pensil/hapus/{{$p->ID}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>
    {{ $pensil->links() }}
@endsection
