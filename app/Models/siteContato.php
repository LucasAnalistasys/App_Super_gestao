<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siteContato extends Model
{
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