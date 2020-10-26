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
@endsection