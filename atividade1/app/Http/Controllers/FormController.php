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
		$morada=$request->morada;
		$automovel=$request->automovel;

		return view('form-enviado', [
			'nome'=>$nome,
			'morada'=>$morada,
			'automovel'=>$automovel
		]);
	}

	public function index(){
		return view ('entrada');
	}
}
