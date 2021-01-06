@extends("layouts.app")

@section("content")

	<table>
		<tr>
			<td>Nama</td>
			<td>{{ Auth::user()->name }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ Auth::user()->email }}</td>
		</tr>
		<tr>
			<td>Koin</td>
			<td>{{ Auth::user()->koin }}</td>
		</tr>
	</table>

	<h2>Beli Voucher</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates accusantium!<br />Odio nemo fugiat numquam, impedit enim sint veritatis, tempora doloremque quasi quod dicta quas dolorem eveniet quo laborum quaerat.</p>
	
	<h2>Masukkan Kode</h2>
	<form method="POST" action="{{ route('voucher.index') }}">
		@csrf
		@method("PUT")
		<div>
			<label for="kode_voucher">Kode Voucher:</label><br />
			<input id="kode_voucher" type="text" name="kode_voucher"  value="{{ old('kode_voucher') }}" placeholder="XXXX-XXXX-XXXX-XXXX" />
		</div>
		<input type="submit" name="submit" value="submit" />
	</form>
	
	@if (session('status'))
		<div style="color: green">{{ session('status') }}</div>
	@endif

	@if ($errors->any())
		@foreach($errors->all() as $error)
		<div style="color: red">{{ $error }}</div>
		@endforeach
	@endif
	
	<h2>Riwayat Pembelian</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates accusantium!<br />Odio nemo fugiat numquam, impedit enim sint veritatis, tempora doloremque quasi quod dicta quas dolorem eveniet quo laborum quaerat.</p>

@endsection