<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Breeze</title>
	<style>
		select, textarea, input {
			margin: 0.5rem 0;
		}
		td, th {
			border: 1px solid lightgray;
			padding: 0.25rem;
		}
		table {
			margin: 1rem 0;
		}
	</style>
</head>

<body>
	<h1>Tryout ABAL ABAL</h1>
	<nav>
		@auth
		<a href="{{ route('dashboard.index') }}">Dashboard</a>
		<a href="{{ route('voucher.index') }}">Voucher</a>
		<a href="{{ route('tryout_skd.index') }}">Try Out SKD</a>
		<a href="{{ url('/to_tpa_tbi') }}">Try Out TPA / TBI</a>
		<a href="{{ url('/peringkat') }}">Cek Peringkat</a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<input type="submit" value="logout"/>
		</form>
		<p style="font-weight: bold; margin: 0.25rem 0; color: crimson;">Koin: {{ Auth::user()->koin }}</p>
		@else
		<a href="/">Home</a>
		<a href="{{ route('login') }}">Login</a>
		<a href="{{ route('register') }}">Register</a>
		@endauth
	</nav>
	@yield("content")
</body>

</html>