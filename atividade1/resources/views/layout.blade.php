<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<!--   <h1>A minha Web App em laravel </h1> -->
	<h2>@yield('header')</h2>
	@yield('conteudo')

	<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>