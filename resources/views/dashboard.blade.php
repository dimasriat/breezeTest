@extends("layouts.app")

@section("content")
	<p>Halo {{  Auth::user()->name  }}!</p>
	<p>SELAMAT KAMU SUDAH LOGIN</p>
@endsection