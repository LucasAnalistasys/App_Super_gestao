<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaFornecedores extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['id' => '1' ,'nome'=> 'Fornecedor 1', 'status' => 'N', 'cnpj' => '000.000.000.00/0000' ],
            1 => ['id' => '2' ,'nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => '']
        ];

        // If Ternário - condiçao se ? se verdade : se falso
        $msg =  @isset($fornecedores[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ Não Informado';
        echo $msg;

        return view('app.fornecedores.lista', compact('fornecedores'));
    }
}
