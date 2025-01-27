<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siteContato extends Model
{
    public $timestamps = true;
    // Tinker
    // php artisan tinker - Abre o shell do tinker no terminal
    // $contato = new App\Models\SiteContato(); - Aqui foi instanciado um objeto da classe Model
    // $contato->nome = 'Lucas' - Dessa forma se atribui um valor ao atributo nome
    // print_r($contato->getAttributes()); - Mostra no terminal as informações armazenadas no Objeto $contato
    // $contato->save(); - Persiste as informações no DB;
}


//Método where() -> 
//uso: $variavel = (classe)::where ('nome_coluna' , 'operador_comparação','coluna')
/*Operadores lógicos

 < (maior);
 <= (maior ou igual);
 > (menor);
 <=(menor ou igual);
 <> (diferente)
 like


 Para fazer uma pesquisa usando o =, basta omitir o parâmetro de operado de comparação.
 Exemplo:
 $contatos = SiteContato::where('nome', 'Lucas')->get();                        
= Illuminate\Database\Eloquent\Collection {#6202
    all: [
      App\Models\siteContato {#6199
        id: 1,
        created_at: "2025-01-15 12:49:23",
        updated_at: "2025-01-15 12:49:23",
        nome: "Lucas",
        telefone: "(31) 1111-6666",
        email: "lucas@contato.com.br",
        motivo_contato: 2,
        mensagem: "Esse é um teste para persistir dados no db",
      },
    ],
  }


 Exemplo: 
 $contatos = SiteContato::where('id', '>' , 1);                               
= Illuminate\Database\Eloquent\Builder {#5238}

Nesse caso voltou um builder, que é uma construção da busca feita
pelo método where(). Para termos o resultado da busca, deve ter o
->get().

Exemplo com get:

$contatos = SiteContato::where('id', '1' , '>')->get();                        
= Illuminate\Database\Eloquent\Collection {#1315
    all: [
      App\Models\siteContato {#5231
        id: 1,
        created_at: "2025-01-15 12:49:23",
        updated_at: "2025-01-15 12:49:23",
        nome: "Lucas",
        telefone: "(31) 1111-6666",
        email: "lucas@contato.com.br",
        motivo_contato: 2,
        mensagem: "Esse é um teste para persistir dados no db",
      },
    ],
  }

*/

// Método whereIn() - $contatos = SiteContato::whereIn('campo_a_ser_comparado_por_igualdade, 'Conjunto_de_parametros');  
/* Exemplo 
    $contatos = SiteContato::whereIn('motivo_contato', [1 , 3])->get();            
= Illuminate\Database\Eloquent\Collection {#6205                                 
    all: [
      App\Models\siteContato {#5202
        id: 2,
        created_at: "2025-01-15 13:00:34",
        updated_at: "2025-01-15 13:00:34",
        nome: "Manuh",
        telefone: "(11) 8888-9999",
        email: "Manuh@contato.com.br",
        motivo_contato: 3,
        mensagem: "Olá, gostaria de saber mais sobre o App Super Gestão",        
      },
      App\Models\siteContato {#5238
        id: 3,
        created_at: null,
        updated_at: null,
        nome: "João",
        telefone: "(88) 91111-2222",
        email: "joao@contato.com.br",
        motivo_contato: 3,
        mensagem: "É muito difícil localizar a opção de listar todos os produtos",
      },
      App\Models\siteContato {#6200
        id: 4,
        created_at: null,
        updated_at: null,
        nome: "Rosa",
        telefone: "(33) 92222-3333",
        email: "rosa@contato.com.br",
        motivo_contato: 1,
        mensagem: "Quando custa essa aplicação?",
      },
      App\Models\siteContato {#5224
        id: 5,
        created_at: null,
        updated_at: null,
        nome: "Fernando",
        telefone: "(11) 94444-5555",
        email: "fernando@contato.com.br",
        motivo_contato: 1,
        mensagem: "Como consigo criar multiplos usuários para minha empresa?",   
      },
      App\Models\siteContato {#5210
        id: 7,
        created_at: null,
        updated_at: null,
        nome: "Ana",
        telefone: "(33) 96666-7777",
        email: "ana@contato.com.br",
        motivo_contato: 3,
        mensagem: "Não gostei muito das cores, consigo mudar de tema?",
      },
    ],
  }

*/

//Método whereNotIn() - $contatos = SiteContato::whereIn('campo_a_ser_comparado_por_dirença, 'Conjunto_de_parametros');

/* Exemplo 
     $contatos = SiteContato::whereNotIn('motivo_contato', [1 , 3])->get();         
= Illuminate\Database\Eloquent\Collection {#6049
    all: [
      App\Models\siteContato {#6197
        id: 1,
        created_at: "2025-01-15 12:49:23",
        updated_at: "2025-01-15 12:49:23",
        nome: "Lucas",
        telefone: "(31) 1111-6666",
        email: "lucas@contato.com.br",
        motivo_contato: 2,
        mensagem: "Esse é um teste para persistir dados no db",
      },
      App\Models\siteContato {#5979
        id: 6,
        created_at: null,
        updated_at: null,
        nome: "André",
        telefone: "(88) 95555-6666",
        email: "andre@contato.com.br",
        motivo_contato: 2,
        mensagem: "Parabéns pela ferramenta, estou obtendo ótimos resultados!",  
      },
      App\Models\siteContato {#5981
        id: 8,
        created_at: null,
        updated_at: null,
        nome: "Helena",
        telefone: "(11) 97777-8888",
        email: "helena@contato.com.br",
        motivo_contato: 2,
        mensagem: "Consigo controlar toda a minha empresa de modo fácil e prático.",
      },
    ],
  }

*/

//Where pode ser encadeado com vários wheres. Exemplo:
//$contatos = SiteContato::where('nome', '<>' , 'Fernando')->whereIn('motivo_contato', [1 , 2])->whereBetween('created_at', ['2020-08-01 00:00:00' , '2020-08-31 23:59:59'])->get(); 
//Basta encaixar os wheres com '->', que nesse caso representa o 'and'. Ou seja, todas as condições devem ser verdadeira ou retorna um false.


//Tambem pode ser usando o encadeamento com o 'or'
//$contatos = SiteContato::where('nome' , '<>' , 'Fernando')->orWhereIn('motivo_contato' , [1 , 2])->orWhere('telefone' , 'like' , '(31)%')->get();    
// Basta adicionar o 'or' antes de cada where, e diferente do and, basta que uma das condições seja satisfeita para retornar true.
           
//Where null - $contatos = SiteContato::whereNull('updated_at')->get(); para achar registros onde esteja com dados nulos.
// Where not null - $contatos = SiteContato::whereNotNull('updated_at')->get(); para achar registros onde esteja com dados não nulos.

//Where Date - $contatos = SiteContato::whereDate('created_at' , '2025-01-15')->get(); Para achar registros por data especifica
//Where Day - $contatos = SiteContato::whereDay('created_at' , '15')->get();  Para achar registros pelo dia;
//Where Month - $contatos = SiteContato::whereMonth('created_at' , '01')->get(); Para achar registros pelo Mês.
//Where Month - $contatos = SiteContato::whereYear('created_at' , '2025')->get();  Para achar registros pelo ano.
//Where Time - $contatos = SiteContato::whereTime('created_at' , '=' , '13:00:34')->get(); Para achar registros pelo horário.

//Busca de registros em grupos - $contato =SiteContato::where(function($query){ $query -> where('nome','Lucas')->orWhere('nome','Jairo'); })->orWhere(function($query){ $query -> whereIn('motivo_contato' , [1,2])->orWhereBetween('id',[4,6]); })->get(); 
// Usando a seguinte sintaxe - $var = ($classe)::where(function ($query){ $query -> (...)})->where(function ($query){ $query -> (...)}) - Dessa forma o filtro do where irá analisar dois grupos de condições.


//$contatos = SiteContato::all(); - Retorna todos os Registros;
//$contatos = SiteContato::orderBy('nome')->get(); Retorna Registros ordenados de forma ascendente, baseado na coluna passada.
//$contatos = SiteContato::orderBy('nome', 'desc')->get(); Retorna Registros ordenados de forma descendente, baseado na coluna passada.


//Collection - E o retorno de um builder com o metodo get(). Com uma collection, pode ser usados outros métodos.
// first() - Retorna o primeiro registro.
// last() - Retorna o último Registro.
// reverse() - Inverte a ordem dos dados dentro dos Registros.
// toArray() - Converte a coleção para um conjunto.
// toJson()- Converte a coleção para Json.
// pluck($coluna) - Monta uma colection contendo apenas os dados da coluna selecionada. Pode se usar outra chave como um array associativo : pluck($coluna , $chave).

/* 
   Atualizar registros - Use o metodo find() para encontrar o registro que deseja alterar. 
   Basta instanciar o registro em uma variavel pelo Tinker, e modificar cada atributo do registro. Use save() para persistir os dados para o DB.
*/

/* 
   Certifique-se de que o modelo está configurado com $fillable: No seu modelo, você deve definir o array $fillable para listar os atributos que podem ser preenchidos em massa:
   protected $fillable = ['nome', 'site', 'uf', 'email'];
   Atualizar registros - tambem pode ser usado o método fill(), passando um array associativo para modificar os atributos em massa.  
   Exemplo: $fornecedor3 -> fill(['nome' => 'Fastway LTDA' , 'site' => 'fastwaymarketing.com.br' , 'uf' => 'MG' , 'email' => 'fastawymd@digital']);  
*/


/* 
   Atualizar Registros - Pode ser usado com filtros para multiplas trocas de objetos através do método update(). Exemplo:
   Fornecedor::whereIn('id' , [1 , 2])->update(['nome' => 'teste' , site => 'teste.com.br']);
*/