<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showhome(){
        return view("home");
    }

    public function showFormularioCadastro(Request $request){
        return view("formulariocadastroCliente");
    }

    public function showFuncionario(){
        return view("formulariofuncionario");
    }
}
