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
       //passando dados pra view de forma direta 
         $dados = [
                'nome' => 'João',
                'idade' => 25,
                'profissao' => 'Desenvolvedor'
          ];
    
          //retornando a view com os dados
       return view('inicio2', $dados);
    }


    //esse metodo mostra um formulário
    
    public function formulario()
    {
        return view('formulario_login');
    }

    public function frase(){
        $data['mostrar'] = false;
        $data['frase'] = 'Frase do meu projeto';
        $data['nomes'] = ['João', 'Maria', 'José', 'Ana'];

        return view('frase',$data);
    }

    
    public function home()
        {
            return view('home');
        }

    public function servicos()
        {
            return view('servicos');
        }

    //essa rota vai receber 2 parametros o primeiro é o nome do contato 
    // o segundo éo apelido do contato isso cria uma situação onde o nome é obrigatório
    // e o apelido é opcional
    
     public function contato($nome, $apelido='')
        {
            $data['nome'] = $nome;
            $data['apelido'] = $apelido;

            return view('contato', $data);
        }






        // Método para retornar a galeria com a página especificada
        // O parâmetro $pagina será passado na URL, por exemplo: /galeria/
        
    public function galeria($pagina)
        {
            $data['pagina'] = $pagina;
            // Retorna a view galeria com a variável $pagina
            return view('galeria',$data);
        }

    
}