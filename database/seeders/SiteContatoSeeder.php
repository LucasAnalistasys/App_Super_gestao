<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        $contato = new siteContato();
        $contato-> nome = 'Contato100';
        $contato-> telefone = '1111-1111';
        $contato-> email = 'Contato100@contato.com.br';
        $contato-> motivo_contato = 1;
        $contato-> mensagem = 'Teste contato 1';
        $contato->save();

    }
}
