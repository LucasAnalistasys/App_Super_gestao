<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Criando a tabela de filiais
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });


        //Criando a Tabela de Produtos Filiais
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preço_venda',8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');

            // Foreign Keys ( Constraints)
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->timestamps();
        });

        //Remover Colunas da tabela Produtos
        Schema::table('produtos' , function (Blueprint $table){
            $table->dropColumn(['preço_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Adicionar Colunas a tabela Produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preço_venda',8,2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->dropColumn(['preço_venda', 'estoque_minimo', 'estoque_maximo']);
        });

        Schema::dropIfExists('produtos_filiais');

        Schema::dropIfExists('filiais');
    }
};
