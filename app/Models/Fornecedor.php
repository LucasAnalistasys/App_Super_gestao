<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Adicionando o Recurso de Remoção suave de registros

/* o Framework Laravel usa o padrão CamelCase para depois encontrar a tabela no DB,
   usando a seguinte regra: Por exemplo, SiteContato seria interpretado como site_contatos. 
   Ou seja, foi colocando um Underline antes da Letra Maiúscula, e foi tudo para letra minúscula, e 
   foi adicionando um S ao final. 
   
   Entretando em alguns casos isso pode voltar um erro, como no exemplo a seguir, Fornecedor, seria 
   fornecedors, pois o framework nao consegue fazer essa trativa.
*/
class Fornecedor extends Model 
{
    use SoftDeletes; // Trait usada para adicionar suporte a soft deletes (não pode ser herdada diretamente via extends).
    // Para sanar o erro provocado no nome da tabela, basta usar o método a seguir:
    protected $table = 'fornecedores'; // Define explicitamente o nome da tabela associada ao modelo:
    protected $fillable = ['nome', 'site', 'email', 'uf']; // O $fillable define quais atributos podem ser preenchidos em massa com o método create() ou update()
}


