<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('CSS/estilos.css')}}">

</head>
<body>

<!--Cabeçalho-->
	<p style="text-align: center">
		<a href="{{route('entrada')}}"><img src="img/logo.jpg"></a>
	</p><hr>
	<h1 style="text-align: center;color: #F78181">@yield('header')</h1>
	@yield('conteudo')



<!--Rodapé-->
	<p style="background: #F78181">
		
		<a href="{{route('empresa')}}">Empresa</a>
	
		<a href="{{route('noticias')}}">Noticias</a>
	</p> 

	<script src="{{asset('JS/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('JS/bootstrap.js')}}"></script>
</body>
</html>