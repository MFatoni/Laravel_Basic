<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width,initial-scale=1.0">
	<meta http-equiv="X UA-Compatible" content="ie-edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css')}}">
</head>
<body>
	@include('shared.navbar')
	<div class="container">
		@yield('content')
		@stack('content')
	</div>
	<script src="{{ asset('jquery/jquery-3.3.1.min.js')}}"></script>
	<script src="{{ asset('jquery/bootstrap.min.js')}}"></script>
	@yield('js')
</body>
</html>