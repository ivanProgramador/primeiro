<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teste;

//rotas 
// no caso da minha rota teste como eu quero chamar o meu controller e não uma view eu 
// nop segunddo para metro eu coloco um array de duas posições na primeira eu coloco o nome ddo conetrroller 
// e aviso que se trata de uma classe e na segunda o nome do método que eu quero chamar que será o index   


Route::get('/inicio', [Teste::class, 'index']);

Route::get('/frm', [Teste::class, 'formulario']);