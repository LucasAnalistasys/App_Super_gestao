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
        Schema::create('unidade', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 30);
            $table->string('descrição', 50);
            $table->timestamps();
        });


        //Adicionando o relacionamento com a tabela Produtos
        Schema::table('produtos' , function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');

            //constraints
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });

           //Adicionando o relacionamento com a tabela produtos_detalhes
           Schema::table('produtos_detalhes' , function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');

            //constraints
            $table->foreign('unidade_id')->references('id')->on('unidade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   

         //Remover o relacionamento com a tabela produtos_detalhes
         Schema::table('produtos_detalhes' , function(Blueprint $table){

            //Remomver Fk
            $table->dropForeign('produtos_detalhes_unidade_id_foreign');// conveção laravel para dropForeign [table]_[coluna]_foreign

            //Remover Column
            $table->dropColumn('unidade_id');
        });

        //Remover o relacionamento com a tabela Produtos
        Schema::table('produtos' , function(Blueprint $table){

            //Remomver Fk
            $table->dropForeign('produtos_unidade_id_foreign');// conveção laravel para dropForeign [table]_[coluna]_foreign

            //Remover Column
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidade');
    }
};
