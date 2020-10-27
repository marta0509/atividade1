@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Registo Completo com sucesso
@endsection
@section('conteudo')
	<b>Nome: </b>{{$nome}}<br>
	<b>Morada: </b>{{$morada}}<br>

	<br>
	<div class="row">
		<div class="col-md-5">
			
		</div>
		<div class="col-md-1">
			<a class="BT" href="#">Voltar</a>
		</div>
		<div class="col-md-1">
			<a class="BT" href="#">Avançar</a>
		</div>
		<div class="col-md-5">

		</div>
	</div>
@endsection