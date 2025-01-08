<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
   public function contato(){

        var_dump($_GET); //Uso da variável global $_GET para receber um array contendo os dados recebidos pelo Method Get do form
        return view('site.contato');
   }
}
