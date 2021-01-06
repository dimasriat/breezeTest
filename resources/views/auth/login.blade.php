@extends("layouts.app")

@section("content")
<h2>LOGIN DULU BOSQUE</h2>
<form method="POST" action="{{ route('login') }}">
	@csrf
	<div>
		<label for="email">Email:</label><br />
		<input id="email" type="email" name="email" placeholder="email" value="{{ old('email') }}"/>
	</div>
	<div>
		<label for="password">Password:</label><br />
		<input id="password" type="password" name="password" placeholder="password" />
	</div>
	<div>
		<label for="remember_me">Remember me:</label><br />
		<input id="remember_me" name="remember" type="checkbox" />
	</div>
	<input type="submit" name="login" value="login" />
</form>
<div>
	@if (Route::has('password.request'))
		<a href="{{ route('password.request') }}">Forgot your password?</a>
	@endif
</div>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection