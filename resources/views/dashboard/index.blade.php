@extends("layouts.app")

@section("content")
	<h2>Greetings!</h2>
	<p>Halo {{  Auth::user()->name  }}!</p>
	<p>SELAMAT KAMU SUDAH LOGIN</p>
	<h2>Data diri</h2>
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
			<td>Jenis Kelamin</td>
			<td>{{ Auth::user()->jenis_kelamin }}</td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>{{ Auth::user()->no_telp }}</td>
		</tr>
		<tr>
			<td>Pendidikan Terakhir</td>
			<td>{{ Auth::user()->pendidikan_terakhir }}</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>{{ Auth::user()->jurusan }}</td>
		</tr>
		<tr>
			<td>Instansi yang Dituju</td>
			<td>{{ Auth::user()->instansi_yang_dituju }}</td>
		</tr>
		<tr>
			<td>Koin</td>
			<td>{{ Auth::user()->koin }}</td>
		</tr>
	</table>
	<a href="{{ route('dashboard.edit') }}">Update Profile</a>
@endsection