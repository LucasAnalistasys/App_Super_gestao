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




/* Verbo http

get
post
put
patch
delete
options 

*/