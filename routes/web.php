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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');
Route::get('/formulario_de_contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; });

Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){ return 'CLientes'; });
    Route::get('/fornecedores',function(){ return 'Fornecedores'; });
    Route::get('/produtos', function(){ return 'Produtos'; });
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

/* Route::redirect('/rota2','/rota1'); */



//nome, categoria, assunto, mensagem

/* Route::get(
    '/contato/{nome}/{categoria_id}/{assunto}/{mensagem}', function(
        string $nome, 
        int $categoria_id, 
        string $assunto, 
        string $mensagem){
    echo "Nova Mensagem: Nome: $nome Categoria: $categoria_id Assunto: $assunto Mensagem: $mensagem";
})->where('nome', '[A-za-z]+')->where('categoria_id' , '[1-9]+'); */



/* Verbo http

get
post
put
patch
delete
options 

*/