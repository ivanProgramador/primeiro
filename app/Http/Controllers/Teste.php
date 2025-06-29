<?php

// namespace trazendo a classe

namespace App\Http\Controllers;


// Importando a classe Request pra usar os metodos dela se precisar

use Illuminate\Http\Request;


//meu controller extendendo a classe Controller do Laravel

class Teste extends Controller
{
    //metodo index que vai retornar a view teste
    
    public function index()
    {
       return view('inicio');
    }

    //esse metodo mostra um formulário
    
    public function formulario()
    {
        return view('formulario_login');
    }

    
}