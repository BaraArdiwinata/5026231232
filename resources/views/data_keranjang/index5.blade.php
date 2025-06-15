@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>

    <br/>
	<table class="table table-striped">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
        <tr>
            <td>{{ $k->ID }}</td>
            <td>{{ $k->KodeBarang }}</td>
            <td>{{ $k->Jumlah }}</td>
            <td>{{ $k->Harga }}</td>
            <td>{{ $k->Jumlah*$k->Harga }}</td>
            <td>
                <a href="/keranjang/tambah" class="btn btn-success">Beli</a>
                <a href="/keranjang/hapus/{{$k->ID}}" class="btn btn-danger">Batal</a>
            </td>
        </tr>
		@endforeach
	</table>
    <br>
    {{-- {{ $karyawan->links() }} --}}
    <br>
@endsection
