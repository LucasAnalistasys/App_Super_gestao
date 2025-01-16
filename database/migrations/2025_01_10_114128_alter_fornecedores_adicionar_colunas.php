<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. // O php artisan migrate executa todos os metodos up das migrations. O php artisan rollback executa o metodo down da migrate mais recente
     * // O rollback pode ser usando com php artisan rollback --step={numero}, para definir quantos passos o rollback deve retroceder
     * 
     */
    public function up(): void //Tudo dentro do metodo up será implantado no banco de dados
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //Tudo dentro do metodo down será retirado do banco de dados
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            //$table->dropColumn('uf');   -- Exlcuindo colunas individualmente do banco de dados
            //$table->dropColumn('email');
            $table->dropColumn(['uf' , 'email']); // excluindo multiplas colunas com s
        });
    }
};
