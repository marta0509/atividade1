@extends('layout')
@section('titulo-pagina')
Formulário
@endsection
@section('header')
Login
@endsection
@section('conteudo')
	<!--aqui fica o form-->
	<form method="post" action="{{route('processar.form')}}">
		@csrf
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>
		<label for="apelido">Apelido</label>
		<input type="text" name="apelido">
		<br>
<button class="BT" type="submit">Login</button>
	</form>
@endsection