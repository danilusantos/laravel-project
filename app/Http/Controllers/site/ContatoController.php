<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $data = [
            'post'  => false,
        ];

        return view('site.pages.contato', compact('data'));
    }

    public function enviar(Request $request){

        $nome       = $request->input('nomeField');
        $email      = $request->input('emailField');
        $telefone   = $request->input('telefoneField');

        $data = [
            'post'      => true,
            'nome'      => $nome,
            'email'     => $email,
            'telefone'  => $telefone
        ];

        return view('site.pages.contato', compact('data'));
    }
}
