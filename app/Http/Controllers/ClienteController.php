<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Mail;
use App\Mail\Seguros;
use App\Perfil;

class ClienteController extends Controller
{
    public function create () {

    }

    public function show () {
        return view(pages.welcome);
    }

    public function store (Request $request) {

        $request->validate([
            'nome'=>'required',
            'idade'=>'required',
            'sexo'=>'required',
            'idade_aposentado' => 'required',
            'perfil' => 'required'
        ], 
        [
           'required' => 'Campo :attribute de preenchimento obrigatório' 
        ]);

        $cliente = new Cliente([
            'nome' => request('nome'),
            'idade' => request('idade'),
            'sexo' => request('sexo'),
            'idade_aposentado' => request('idade_aposentado'),
            'valor_acumulado' => request('valor_acumulado'),
            'valor_mensal' => request('valor_mensal'),
            'contribuicao_mensal' => request('contribuicao_mensal'),
            'reservaEst' => request('reservaEst'),
            'perfil' => request('perfil')
        ]);

        $cliente->save();

        return redirect('/segunda')->with('success', 'Simulacao realizada com sucesso!');

    }


}
