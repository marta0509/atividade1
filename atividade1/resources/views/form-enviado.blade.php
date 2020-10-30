@extends('layout')
@section('titulo-pagina')
Contacte-nos
@endsection
@section('header')
Mensagem enviada com sucesso
@endsection
@section('conteudo')
	<b>Nome:     </b>{{$nome}}<br>
	<b>Apelido:  </b>{{$apelido}}<br>
	<b>Email:    </b>{{$mail}}<br>
	<b>Mensagem: </b>{{$mensagem}}<br>

	<br>
	<p style="text-align: center"><a class="BT" href="{{route('entrada')}}">Voltar</a></p>
		
@endsection