<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet"  href="{{asset('CSS/bootstrap.min.css')}}">
	<!--<link rel="stylesheet" type="text/css" src="{{asset('CSS/estilos.css')}}">-->

</head>
<body>

<!--Cabeçalho-->
	<p style="text-align: center">
	<a href="{{route('entrada')}}" ><img src="img/logo.png" height="180px"></a>
	</p>

	<div style="background:#F78181;" class="row">
		<div class="col-md-1">
			
		</div>

		<div class="col-md-2">
			<a class="BT" href="{{route('entrada')}}">Home</a>
		</div>

		<div class="col-md-2">
			<a class="BT" href="{{route('empresa')}}">Empresa</a>
		</div>

		<div class="col-md-2">
			<a class="BT" href="{{route('noticias')}}">Noticias</a>
		</div>
			
		<div class="col-md-2">
			<a class="BT" href="{{route('onde.estamos')}}">Onde Estamos</a>
		</div>

		<div class="col-md-2">
			<a class="BT" href="{{route('mostrar.form')}}">Contactos</a>
		</div>
	</div>	
	
	<h1 style="text-align: center;color: #F78181">@yield('header')</h1>
	@yield('conteudo')

<!--Conteudo-->

	
	
	<script src="{{asset('JS/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('JS/bootstrap.js')}}"></script>
</body>
</html>