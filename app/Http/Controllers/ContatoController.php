<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
   public function contato(Request $request){
        echo'<pre>';
        print_r($request->all()); 
        echo'</pre>';
        echo '</br>';
        echo $request->input('nome');
        //var_dump($_POST); //Uso da variável global $_GET para receber um array contendo os dados recebidos pelo Method Get do form
        return view('site.contato');
   }
}
