@extends('template')

@section('content')
	<h3>Data Nilai Siswa</h3>
	<a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>

    <br/>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
        <tr>
            <td>{{ $n->id }}</td>
            <td>{{ $n->normorinduksiswa }}</td>
            <td>{{ $n->nilaiangka }}</td>
            <td>{{ $n->sks }}</td>
            <td>
                @if($n->nilaiangka <= 40)
                    D
                @elseif($n->nilaiangka >=41 && $n->nilaiangka <= 60)
                    C
                @elseif($n->nilaiangka >=61 && $n->nilaiangka <= 80)
                    B
                @else
                    A
                @endif
                </td>
            <td>{{ $n->sks * $n->nilaiangka }}</td>
        </tr>
		@endforeach
	</table>
@endsection
