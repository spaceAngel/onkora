<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Onkora</title>

	<!-- Fonts -->

	<!-- Styles / Scripts -->
		@vite(['resources/css/app.scss'])

<body>
	<div class="container">
		<header class="mb-4 mt-4 row">
			<div class="col-5">
				<a href="/">"<img class="img-logo" src="{{asset('/images/logo.png')}}" /></a>
			</div>
			<div class="col"></div>
			<div class="col-3">
				<div class="border rounded-2 p-4 m-1">
					<div class="fw-bold">
						MUDr. Vyřízl Bolíto, PhD.
					</div>
					<a href="/">Odhlásit</a>
				</div>
			</div>
		</header>
		<nav>
			@include('doctor.@components.menu-main')
		</nav>
		<div class="p-3 mt-3">
			@yield('content')
		</div>
	</div>

	@vite(['resources/js/app.js']);
</body>
</html>
