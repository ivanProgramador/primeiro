<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teste;

//rotas 
// no caso da minha rota teste como eu quero chamar o meu controller e não uma view eu 
// no segundo parametro eu coloco um array de duas posições na primeira eu coloco o nome ddo conetrroller 
// e aviso que se trata de uma classe e na segunda o nome do método que eu quero chamar que será o index   

//uma aplicação de médio porte pode ter centenas de rotas por isso o laravel permite que eu cria eum alias
// para cada rota, assim eu posso chamar a rota pelo nome e não pelo caminho completo
// dessa forma mesmo que rota mude ela fica associada a o nome então ela continua acessivel 
// mesmo que a rota '/inicio'  mude para '/home' ou '/inicio123' tanto faz ela continua sendo acessivel   

  
Route::get('/inicio', [Teste::class, 'index']) -> name('start');

Route::get('/frm', [Teste::class, 'formulario']) ->name('login');

Route::get('/mensagem', [Teste::class, 'frase']) ->name('frase');

Route::get('/home', [Teste::class, 'home']) ->name('home');
Route::get('/servicos', [Teste::class, 'servicos']) ->name('servicos');

//dessa forma eu criei uma rota que recebe dois parametros
//o primeiro é o nome do contato e o segundo é o apelido do contato
//o sinal de interrogação (?) indica que o apelido é opcional


Route::get('/contato/{nome}/{apelido?}', [Teste::class, 'contato']) ->name('contato');

//passando parametros para a rota por query string 
//se eu fizer isso todas as vezes que precisar acessar a galeria eu vou precisar passar o parametro pag
//por exemplo: /galeria/1 ou /galeria/2 ou /galeria

Route::get('/galeria/{pag}', [Teste::class, 'galeria']) ->name('galeria');