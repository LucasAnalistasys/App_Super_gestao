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
        Schema::create('produtos_detalhes', function (Blueprint $table) {
            $table->id();
            //Foreing Key
            $table->UnsignedBigInteger('produto_id'); // A foreing key que vem da tabela Produtos deve ter o mesmo tipo da chave primária da tabela mais forte.
            $table->float('Comprimento', 8 ,2);
            $table->float('Largura', 8 ,2);
            $table->float('Altura', 8 ,2);
            $table->timestamps();

            //Constraints
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_detalhes');
    }
};
