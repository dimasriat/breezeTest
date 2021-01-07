@extends("layouts.app")

@section("content")
	<h2>Try Out SKD</h2>
		
	@if (session('status'))
		<div style="color: green">{{ session('status') }}</div>
	@endif

	@if ($errors->any())
		@foreach($errors->all() as $error)
		<div style="color: red">{{ $error }}</div>
		@endforeach
	@endif
	
	<table>
		<tr>
			<th>Nama Paket Soal</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
		@foreach($paket_soal as $soal)
		<tr>
			<td>{{ $soal->nama }}</td>
			<td>{{ $soal->harga }}</td>
			<td>
				<form method="POST" action="{{ route('tryout_skd.store') }}">
					@csrf
					<input type="hidden" name="paket_soal_id" value="{{ $soal->id }}" />
					<button type="submit">BELI</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	
	<h2>Try Out SKD Dibeli</h2>
	<table>
		<tr>
			<th>Nama Paket Soal</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
		@foreach($paket_soal_dibeli as $soal)
		<tr>
			<td>{{ $soal->nama }}</td>
			<td>{{ $soal->harga }}</td>
			<td>
				<a href="#">Kerjakan</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection