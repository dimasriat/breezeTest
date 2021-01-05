@extends("layouts.app")

@section("content")
<h2>PIKUN BOSQUE?</h2>
<form method="POST" action="{{ route('password.email') }}">
	@csrf
	<div>
		<label for="email">Email:</label><br />
		<input id="email" type="email" name="email" placeholder="email" />
	</div>
	<input type="submit" name="confirm" value="send reset link" />
</form>

@if (session('status'))
	<div style="color: green">{{ session('status') }}</div>
@endif

@if ($errors->any())
	@foreach($errors->all() as $error)
	<div style="color: red">{{ $error }}</div>
	@endforeach
@endif

@endsection