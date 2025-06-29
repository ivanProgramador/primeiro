<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.::frase::.</title>
</head>
<body>

    <div>
        <h2>A ideia aqui e testar a exibição condicional do blade</h2>
        <!-- testando se o insice mostrar e verdadeiro se for o blade mostra a frase senão ele não mostra -->
        @if($mostrar)
            <p style="color:red">{{ $frase }}</p>
        @else
            <p style="color:gray">Nada para mostrar</p>      
        @endif
    </div>

    <h2>Usando o blade pra mostrar uma lista</h2>

    <div>
          <p>Lista de nomes</p>
          @foreach($nomes as $nome)
           
            <ul>
                <li>{{ $nome }}</li>
            </ul>
           

          @endforeach        
    </div>


    
    
</body>
</html>