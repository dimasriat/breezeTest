@extends("layouts.app")

@section("content")

	<h2>Voucher Tersedia</h2>
	<table>
		<tr>
			<th>serial</th>
			<th>nama</th>
			<th>koin</th>
		</tr>
		@foreach($voucherAvailable as $voucher)
		<tr>
			<td>{{ $voucher->serial }}</td>
			<td>{{ $voucher->nama }}</td>
			<td>{{ $voucher->koin }}</td>
		</tr>
		@endforeach
	</table>
	
	<h2>Masukkan Kode</h2>
	<form method="POST" action="{{ route('voucher.update') }}">
		@csrf
		@method("PUT")
		<div>
			<label for="serial">Kode Voucher:</label><br />
			<input id="serial" type="text" name="serial"  value="{{ old('serial') }}" placeholder="XXX-XXX" />
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