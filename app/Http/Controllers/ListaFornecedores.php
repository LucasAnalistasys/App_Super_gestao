<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaFornecedores extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['id' => '1' ,
                'nome'=> 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '000.000.000.00/0000', 
                'ddd' => '31',
                'telefone' => '0000-0000' ],

            1 => ['id' => '2' ,
                  'nome' => 'Fornecedor 2', 
                  'status' => 'S', 
                  'cnpj' => '',
                  'ddd' => '11',
                  'telefone' => '1111-1110'],

            2 => ['id' => '3' ,
                  'nome' => 'Fornecedor 3', 
                  'status' => 'S',
                  'ddd' => '11',
                  'telefone' => '2222-2222']
        ];

        // If Ternário - condiçao se ? se verdade : se falso

        /*
            $msg =  @isset($fornecedores[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ Não Informado';
            echo $msg;
        */
        return view('app.fornecedores.lista', compact('fornecedores'));
    }
}
