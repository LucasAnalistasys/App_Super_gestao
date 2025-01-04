<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['fornecedor 1',
                         'fornecedor 2',
                         'fornecedor 3',
                         'fornecedor 4',
                         'fornecedor 5',
                         'fornecedor 6',
                         'fornecedor 7',
                         'fornecedor 8',
                         'fornecedor 9',
                         'fornecedor 10',
                         'fornecedor 11'];
        return view('app.fornecedores.index' , compact('fornecedores'));
    }
}
