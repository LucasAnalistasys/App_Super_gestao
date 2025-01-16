<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/* o Framework Laravel usa o padrão CamelCase para depois encontrar a tabela no DB,
   usando a seguinte regra: Por exemplo, SiteContato seria interpretado como site_contatos. 
   Ou seja, foi colocando um Underline antes da Letra Maiúscula, e foi tudo para letra minúscula, e 
   foi adicionando um S ao final. 
   
   Entretando em alguns casos isso pode voltar um erro, como no exemplo a seguir, Fornecedor, seria 
   fornecedors, pois o framework nao consegue fazer essa trativa.
*/
class Fornecedor extends Model 
{
    // Para sanar o erro provocado no nome da tabela, basta usar o método a seguir:
    protected $table = 'fornecedores'; // Aqui pode se passar o nome da tabela que deverá ser usada no DB, podendo ser qualquer nome.
    protected $fillable = ['nome', 'site', 'email', 'uf']; // O $fillable define quais atributos podem ser preenchidos em massa com o método create() ou update()
}
