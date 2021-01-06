@extends("layouts.app")

@section("content")
	<h2>Try Out SKD</h2>
	<table>
		<tr>
			<th>Nama Paket Soal</th>
			<th>Harga</th>
			<th colspan="2">Action</th>
		</tr>
		@foreach($paket_soal as $soal)
		<tr>
			<td>{{ $soal->nama }}</td>
			<td>{{ $soal->harga }}</td>
			<td>
				<a href="#">Beli</a>
			</td>
			<td>
				<a href="#">Cek Hasil</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection