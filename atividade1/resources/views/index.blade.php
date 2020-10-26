@extends('layout')
@section('titulo-pagina')
Registo
@endsection
@section('header')
Bem-Vindo
@endsection
@section('conteudo')
<p>Preencha este Formulário para iniciar a visita ao site. </p>

<a href="{{route('mostrar.form')}}">Ir para o formulário</a>
@endsection