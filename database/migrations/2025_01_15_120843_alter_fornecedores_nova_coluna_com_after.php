<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   

    // Comandos Php Artisan Migrate:Status, Reset, Refresh, Fresh
    // Status: mostra o status das Migrations no Terminal
    // Reset: Executa o Rollback de todas as Migrations
    // Refresh: Executa o Rollback de Todas Migrations e executa o Migrate depois
    // Fresh: Dropa os Objetos das tables sem Rollback e executa o Migrate depois
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fornecedores' , function (Blueprint $table){
            $table->string('site', 150)->after('nome'); // O after ira inserir a coluna após a coluna citada no método
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedores' , function (Blueprint $table){
            $table->dropColumn('site');
        });
    }
};
