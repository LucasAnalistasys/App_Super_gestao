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

// Rotas Definidas com Controllers

/*Nomeação de rotas : Use no fim da rota ->name('$nome da rota') - Vantagem: Se a Rota acabar mudando seu caminho por qualquer motivo, 
o apelido da Rota permanece o mesmo, evitando ter de mudar a Rota no código inteiro */

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');
Route::get('/formulario_de_contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; });


// Agrupamento de Rotas com prefix: Use Route::prefix('$nome-do-prefixo)->group(function(){ COLOQUE TODAS AS ROTAS DO AGRUPAMENTO AQUI })

Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){ return 'CLientes'; });
    Route::get('/fornecedores',function(){ return 'Fornecedores'; });
    Route::get('/produtos', function(){ return 'Produtos'; });
});


/* Redirecionamento de Rotas - 

Caso uma rota seja chamada, redireciona para outra Rota. Pode ser feita de 2 formas:
    1 -  Route::redirect('/$rota-origem','/$rota-redirecionada'); 
    2- Route::get('/rota-origem', function(){
    return redirect()->route('site.rota1')*usando callback e nome de Rotas*;
    })->name('site.rota2');

*/
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'] )->name('teste');

/* Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2'); */

/* Route::redirect('/rota2','/rota1'); *Exemplo de Redirecionamento com callback**/


//Rota de Contingência 'fallback' - Caso uma Rota inexistente seja acessada, irá mostrar o conteúdo definido a seguir:

Route::fallback(function(){
    echo 'A rota acessada não existe! Clique no botão para ir para Página Inicial -> 
    <a style="padding:10px; color:white; background-color: green" href="'.route('site.index').'">
        Página Inicial
    </a>';
});



// Tratamento de Rotas com Expressões Regulares

// Nome, Categoria, Assunto, Mensagem

/* Route::get(
    '/contato/{nome}/{categoria_id}/{assunto}/{mensagem}', function(
        string $nome, 
        int $categoria_id, 
        string $assunto, 
        string $mensagem){
    echo "Nova Mensagem: Nome: $nome Categoria: $categoria_id Assunto: $assunto Mensagem: $mensagem";
})->where('nome', '[A-za-z]+')->where('categoria_id' , '[1-9]+'); */

/* ->where('nome', '[A-za-z]+')->where('categoria_id', '[1-9]+');
   **Explicação:**
   - **'nome':** O primeiro parâmetro está definindo uma restrição para o segmento `{nome}` da rota. Esse parâmetro será extraído da URL e processado como o valor da variável `$nome`.
   - **'[A-Za-z]+':** Este padrão indica que o parâmetro `{nome}` deve conter apenas letras (maiúsculas ou minúsculas) e pelo menos uma letra é obrigatória.
   - **'categoria_id':** O segundo parâmetro está definindo uma restrição para o segmento `{categoria_id}` da rota, que será mapeado para a variável `$categoria_id`.
   - **'[1-9]+':** Este padrão define que o parâmetro `{categoria_id}` deve conter apenas números entre 1 e 9, e pelo menos um número é obrigatório. 
                   Isso impede valores como 0 ou números decimais.
*/



/* Verbo http

get
post
put
patch
delete
options 

*/