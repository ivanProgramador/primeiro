<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <h2>Ponto de partida</h2>
    <ul>
        <li>
            <!-- como estou dentro de um framework as rotas não podem ser acessadas de forma direta 
                abaixo estou usando ums instrução php para poder acessar a rota por enquanto vou usar isso 
                pra navegar entre as rotas ate achar uma forma melhor de fazer isso
            -->
            <a href={{ url('/frm') }}>Formulário</a>

            <!--
              embora eu esteja dentro de aruivo blade eu posso usar o php puro
              mas para deixar claro para o blade que existe php puro nessa pagina 
            -->
            
            @php
               //essa tag deve ser usada quando instruções mais complexas forem usadas
               //não e normal usar php puro dentro de um arquivo blade
                //mas é possível dessa forma caso seja necessário 
            @endphp

            <div>
                <!-- o método tem um array com esses 3 dados o fetch do blade é automático então eu só preciso referenciar as chaves   -->
                 {{ 'Nome: '.$nome  }} <br>
                 {{ 'Idade: '.$idade}}<br>
                 {{ 'Profissão: '.$profissao}}<br>
            </div>

            
        </li>
    </ul>
</html>