<?php

use Illuminate\Support\Facades\Route;

/* Rotas definidas com callback

Route::get('/', function () {
    return "Olá, seja Bem vindo!";
});


Route::get('/sobrenos', function () {
    return "Sobre nós";
});

Route::get('/contato', function () {
    return "Contato";
});


*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);


//nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome}/{categoria_id}/{assunto}/{mensagem}', function(
        string $nome, 
        int $categoria_id, 
        string $assunto, 
        string $mensagem){
    echo "Nova Mensagem: Nome: $nome Categoria: $categoria_id Assunto: $assunto Mensagem: $mensagem";
})->where('nome', '[A-za-z]+')->where('categoria_id' , '[1-9]+');



/* Verbo http

get
post
put
patch
delete
options 

*/