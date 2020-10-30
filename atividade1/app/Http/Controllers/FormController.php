<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function mostrarForm(){
    	return view ('form');
    }

    public function processarForm(Request $request)
	{
		$nome=$request->nome;
		$apelido=$request->apelido;
		$mail=$request->mail;
		$mensagem=$request->mensagem;

		return view('form-enviado', [
			'nome'=>$nome,
			'apelido'=>$apelido,
			'mail'=>$mail,
			'mensagem'=>$mensagem
		]);
	}

	public function index(){
		return view ('entrada');
	}

	public function empresa(){
		return view ('empresa');
	}

	public function noticias(){
		return view ('noticias');
	}

	public function ondeestamos(){
		return view ('onde-estamos');
	}
}
