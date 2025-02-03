<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
   public function contato(Request $request){
      /*
        echo'<pre>';
        print_r($request->all()); 
        echo'</pre>';
        echo '</br>';
        echo $request->input('nome');
        */
        
        /*
         // Criamos o novo Objeto contato e atribuimos os valores do request
         $contato = new SiteContato();
         $contato->nome = $request->input('nome');
         $contato->email = $request->input('email');
         $contato->telefone = $request->input('telefone');
         $contato->motivo_contato = $request->input('motivo_contato', 'Outro'); // Define 'Outro' se vier null
         $contato->mensagem = $request->input('mensagem');

         // dd($request->all()); // Para visualizar os atributos do $request
         $contato->save(); // Persistir os dados do formulário no banco de dados
         // print_r($contato->getAttributes()); // Exibir as informações do Objeto $contato no navegador

        */

        $contato = new SiteContato();
        //$contato->fill($request->all()); // preenche automaticamente os atributos do Objeto $contato recebidos no $request
        $contato->create($request->all()); // Cria um novo registro diretamente no DB com os atributos recebidos no $request
        //var_dump($_POST); //Uso da variável global $_GET para receber um array contendo os dados recebidos pelo Method Get do form
        return view('site.contato');
   }
}
