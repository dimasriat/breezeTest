@extends("layouts.app")

@section("content")
<h2>Ganti Password yuk</h2>
<form method="POST" action="{{ route('password.update') }}">
	@csrf
	<div>
		<label for="email">Email:</label><br />
		<input id="email" type="email" name="email" placeholder="email" />
	</div>
	<div>
		<label for="password">Password:</label><br />
		<input id="password" type="password" name="password" placeholder="password" />
	</div>
	<div>
		<label for="password_confirmation">Password Confirmation</label><br />
		<input id="password_confirmation" type="password" name="password_confirmation" placeholder="password" />
	</div>
	<input type="hidden" name="token" value="{{ $request->route('token') }}">
	<input type="submit" name="update" value="update" />
</form>
@if ($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">{{ $error }}</div>
@endforeach
@endif
@endsection