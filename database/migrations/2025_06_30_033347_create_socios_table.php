<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   //metodo up cria a tabela socios
    public function up(): void
    {
        Schema::create('socios', function (Blueprint $table) {

           //não quero que o nome do id seja somente id então vou usar o id_socio

            $table->id('id_socio');

           //o campo nome será do tipo string com tamanho máximo de 50 caracteres 
            $table->string('nome', 50);
            $table->string('telefone', 20);
            $table->timestamps();
        });
    }
   
    //metodo down apaga a tabela socios
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};