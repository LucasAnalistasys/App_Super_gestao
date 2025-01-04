<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaFornecedores extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['id' => '1' ,'nome'=> 'Fornecedor 1', 'status' => 'N', 'cnpj' => '000.000.000.00/0000' ],
            1 => ['id' => '2' ,'nome' => 'Fornecedor 2', 'status' => 'S']
        ];
        return view('app.fornecedores.lista', compact('fornecedores'));
    }
}
