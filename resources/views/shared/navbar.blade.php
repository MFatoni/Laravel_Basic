<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width,initial-scale=1.0">
	<meta http-equiv="X UA-Compatible" content="ie-edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css')}}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="{{ route('home') }}">Universitas Cyber</a>
		<div>
			<ul class="navbar-nav mr-auto">
			<li class="nav-item">
			<a class="nav-link" href="{{ route('mahasiswa') }}">Mahasiswa</a>
			</li>
			</ul>
		</div>
	</nav>
<!-- End Navbar -->
<!-- Content -->
<div class="container">
@yield('content')
</div>
	<script src="{{ asset('jquery/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('jquery/bootstrap.min.js')}}"></script>
</body>
</html>