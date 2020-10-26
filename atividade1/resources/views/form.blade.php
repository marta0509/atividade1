@extends('layout')
@section('titulo-pagina')
Formulário
@endsection
@section('header')
Registo
@endsection
@section('conteudo')
	<!--aqui fica o form-->
	<form method="post" action="{{route('processar.form')}}">
		@csrf
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>

		<label for="morada">Morada</label>
		<input type="text" name="morada">
		<br>
<button type="submit">Enviar</button>
	</form>
@endsection