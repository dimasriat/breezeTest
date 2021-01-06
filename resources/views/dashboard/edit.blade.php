@extends("layouts.app")

@section("content")
<h2>Edit Profile</h2>
<form method="POST" action="{{ route('dashboard.update') }}">
	@csrf
	@method("PUT")
	<div>
		<label for="name">Name:</label><br />
		<input id="name" type="text" name="name" value="{{ Auth::user()->name }}" />
	</div>
	<div>
		<label for="name">Jenis Kelamin:</label><br />
		<select id="jenis_kelamin" name="jenis_kelamin">
			<option value="Laki-laki" selected="{{ Auth::user()->jenis_kelamin == 'Laki-laki' ? true : false }}">Laki-laki</option>
			<option value="Perempuan" selected="{{ Auth::user()->jenis_kelamin == 'Perempuan' ? true : false }}">Perempuan</option>
		</select>
	</div>
	<div>
		<label for="no_telp">Nomor Telepon:</label><br />
		<input id="no_telp" type="text" name="no_telp" value="{{ Auth::user()->no_telp }}" />
	</div>
	<div>
		<label for="pendidikan_terakhir">Pendidikan Terakhir:</label><br />
		<input id="pendidikan_terakhir" type="text" name="pendidikan_terakhir" value="{{ Auth::user()->pendidikan_terakhir }}" />
	</div>
	<div>
		<label for="jurusan">Jurusan:</label><br />
		<input id="jurusan" type="text" name="jurusan" value="{{ Auth::user()->jurusan }}" />
	</div>
	<div>
		<label for="instansi_yang_dituju">Instansi yang Dituju:</label><br />
		<input id="instansi_yang_dituju" type="text" name="instansi_yang_dituju" value="{{ Auth::user()->instansi_yang_dituju }}" />
	</div>
	<input type="submit" name="update" value="update" />
</form>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection