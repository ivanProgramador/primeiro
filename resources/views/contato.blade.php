
@extends('layouts.layout_main')
@section('conteudo')

<div>
    <h1>Contato</h1>
    <hr>
    <p>Nome (obrigatório): {{ $nome }}</p>
    <p>Apelido (opcional) : {{ $apelido }}</p>
    
</div>
@endsection
