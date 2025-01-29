<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instaciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor-> nome = 'Fornecedor 100';
        $fornecedor->site = 'Fornecedor100.com.br';
        $fornecedor->uf = 'MG';
        $fornecedor->email = 'fornecedor100@contato.com.br';
        $fornecedor->save();

        //Método create (Atenação ao fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'Fornecedor200.com.br',
            'uf' => 'CE',
            'email' => 'fornecedor200@contato.com.br'
        ]);

        //Método Insert ( Não registra updated_at e created_at por não ser um método eloquent)
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'Fornecedor300.com.br',
            'uf' => 'RO',
            'email' => 'fornecedor300@contato.com.br'
        ]);

    }
}
