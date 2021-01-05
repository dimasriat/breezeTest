@extends("layouts.app")

@section("content")
<h2>DAFTAR DULU CUYYY</h2>
<form method="POST" action="{{ route('register') }}">
	@csrf
	<div>
		<label for="name">Name:</label><br/>
		<input id="name" type="text" name="name" placeholder="name" />
	</div>
	<div>
		<label for="email">Email:</label><br/>
		<input id="email" type="email" name="email" placeholder="email" />
	</div>
	<div>
		<label for="password">Password:</label><br/>
		<input id="password" type="password" name="password" placeholder="password" />
	</div>
	<div>
		<label for="password_confirmation">Confirm Password:</label><br/>
		<input id="password_confirmation" type="password" name="password_confirmation" placeholder="password" />
	</div>
	<input type="submit" name="register" value="register" />
</form>
@if ($errors->any())
	@foreach($errors->all() as $error)
	<div style="color: red">{{ $error }}</div>
	@endforeach
@endif
@endsection