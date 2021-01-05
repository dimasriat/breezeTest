<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Breeze</title>
	<style>
		input {
			margin: 0.5rem 0;
		}
	</style>
</head>

<body>
	<h1>BREEZE</h1>
	<nav>
		<a href="/">Home</a>
		@auth
		<a href="{{ url('/dashboard') }}">Dashboard</a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<input type="submit" value="logout"/>
		</form>
		@else
		<a href="{{ route('login') }}">Login</a>
		<a href="{{ route('register') }}">Register</a>
		@endauth
	</nav>
	@yield("content")
</body>

</html>