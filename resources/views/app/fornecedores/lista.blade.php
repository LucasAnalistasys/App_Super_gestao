<h3>Lista de Fornecedores</h3>

{{-- 

@isset($variavel)
    <!-- O código dentro deste bloco será executado se a variável estiver definida e não for null -->
@endisset

@empty($variavel)
    <!-- O código dentro deste bloco será executado se a variável estiver vazia -->
    <!--m Casos Aplicáveis:
        - '' (stg vazia)
        - 0  (int)
        - 0.0 (float)
        - '0' (stg com valor 0)
        - null (nulo)
        - false (falso)
        - array[] (array vazia)
        - $var (Variavel definida sem nada)

@endempty
 --}}

<h4> USO DO FOR </h4>

@isset($fornecedores)

    <!-- Na condição do for, esta sendo checado se o índice de cada item do array ainda está definido.
    No caso de não estar mais definido, retorna false e encerra o loop for -->

    @for($i = 0 ; isset($fornecedores[$i]) ; $i++) 

        Fornecedor: {{$fornecedores [$i]['nome']}}
        <br/>

        Status: {{$fornecedores [$i]['status']}}
        <br/>

        <!-- verifica se Variável testada está definida (isset)
            ou
            Verifica se Variável testada retorna valor null
        -->
        CNPJ: {{ $fornecedores [$i]['cnpj'] ?? 'Não Preenchido'}}
        
        <br/>
        TELEFONE: ({{$fornecedores[$i]['ddd']}}) {{$fornecedores[$i]['telefone']}}
        <br/>

        {{-- O bloco switch é usado para determinar o estado do fornecedor com base no DDD. 
        Cada caso representa um DDD específico e exibe o estado correspondente. Se nenhum DDD corresponder, o default será exibido. --}}
        ESTADO:

        @switch($fornecedores[$i]['ddd'])

        
            @case('31')
                BELO HORIZONTE - MG
                @break

        
            @case('11')
                SÃO PAULO - SP
                @break

            @case('32')
                JUIZ DE FORA - MG
                @break

    
            @default
                Estado não Identificado

        @endswitch
        <!-- Finaliza a estrutura switch -->
        <hr>

    @endfor    

@endisset    

<h4> USO DO WHILE </h4>

@isset($fornecedores)

    <!-- No while, não temos o incremento como no for. While funciona assim: while(true)
    Portanto, a variável deve ser definida dentro de um bloco php, e o incremento colocado 
    dentro do laço tambem como um bloco php -->

    @php $i = 0 @endphp
    @while(isset($fornecedores[$i])) 

        Fornecedor: {{$fornecedores [$i]['nome']}}
        <br/>

        Status: {{$fornecedores [$i]['status']}}
        <br/>

        <!-- verifica se Variável testada está definida (isset)
            ou
            Verifica se Variável testada retorna valor null
        -->
        CNPJ: {{ $fornecedores [$i]['cnpj'] ?? 'Não Preenchido'}}
        
        <br/>
        TELEFONE: ({{$fornecedores[$i]['ddd']}}) {{$fornecedores[$i]['telefone']}}
        <br/>

        {{-- O bloco switch é usado para determinar o estado do fornecedor com base no DDD. 
        Cada caso representa um DDD específico e exibe o estado correspondente. Se nenhum DDD corresponder, o default será exibido. --}}
        ESTADO:

        @switch($fornecedores[$i]['ddd'])

        
            @case('31')
                BELO HORIZONTE - MG
                @break

        
            @case('11')
                SÃO PAULO - SP
                @break

            @case('32')
                JUIZ DE FORA - MG
                @break

    
            @default
                Estado não Identificado

        @endswitch
        <!-- Finaliza a estrutura switch -->

        @php $i++ @endphp
        <hr>
        
    @endwhile    

@endisset

<h4> USO DO FOREACH </h4>

@isset($fornecedores)

    <!-- O foreach é uma estrutura de repetição ideal para percorrer arrays ou coleções de objetos. 
    Ele já lida automaticamente com o incremento, o que significa que não precisamos nos preocupar 
    com o controle do índice como fazemos no for. O foreach percorre todos os elementos do array 
    ou coleção de forma simplificada. -->

    @foreach ($fornecedores as $indice => $fornecedor)

        Fornecedor: {{$fornecedor['nome']}}
        <br/>

        Status: {{$fornecedor['status']}}
        <br/>

        <!-- Verifica se a variável 'cnpj' está definida e não é null. Se estiver, exibe o valor; 
        caso contrário, exibe a mensagem 'Não Preenchido'. -->
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não Preenchido'}}
        
        <br/>
        TELEFONE: ({{$fornecedor['ddd']}}) {{$fornecedor['telefone']}}
        <br/>

        {{-- O bloco switch é usado para determinar o estado do fornecedor com base no DDD. 
        Cada caso representa um DDD específico e exibe o estado correspondente. Se nenhum DDD corresponder, 
        o default será exibido. --}}

        ESTADO:

        @switch($fornecedor['ddd'])

            @case('31')
                BELO HORIZONTE - MG
                @break

            @case('11')
                SÃO PAULO - SP
                @break

            @case('32')
                JUIZ DE FORA - MG
                @break

            @default
                Estado não Identificado

        @endswitch
        <!-- Finaliza a estrutura switch -->
        <hr>

    @endforeach

@endisset


<h4> USO DO FORELSE / Variável $loop </h4>

    <!-- O forelse é uma estrutura de repetição especial no Blade, usada para percorrer arrays ou coleções. 
     Ele combina a funcionalidade do foreach com a possibilidade de tratar cenários onde o array ou 
     coleção esteja vazio. Se os dados existirem, ele funciona como um foreach; caso contrário, 
     o bloco @ empty é executado. Essa abordagem evita verificações extras antes de iterar. -->

     <!-- A variável $loop é automaticamente disponibilizada em estruturas de repetição no Blade, como foreach e forelse. 
     Ela oferece informações úteis sobre o estado atual da iteração, permitindo maior controle e personalização. 
     
     Exemplos de propriedades da variável $loop:
     - $loop->iteration: Indica o número atual da iteração (1 para a primeira, 2 para a segunda, etc.).
     - $loop->first: Retorna true se for a primeira iteração.
     - $loop->last: Retorna true se for a última iteração.
     - $loop->count: Retorna o total de itens na coleção ou array.
     
     Essas propriedades são úteis para aplicar classes CSS específicas, adicionar separadores ou outros comportamentos 
     dependendo da posição do item na iteração. -->

 @forelse ($fornecedores as $indice => $fornecedor)

    Iteração atual: {{$loop->iteration}}
    <br/>
    Fornecedor: {{$fornecedor['nome']}}
        <br/>

        Status: {{$fornecedor['status']}}
        <br/>

        <!-- Verifica se a variável 'cnpj' está definida e não é null. Se estiver, exibe o valor; 
        caso contrário, exibe a mensagem 'Não Preenchido'. -->
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não Preenchido'}}
        
        <br/>
        TELEFONE: ({{$fornecedor['ddd']}}) {{$fornecedor['telefone']}}
        <br/>

        {{-- O bloco switch é usado para determinar o estado do fornecedor com base no DDD. 
        Cada caso representa um DDD específico e exibe o estado correspondente. Se nenhum DDD corresponder, 
        o default será exibido. --}}

        ESTADO:

        @switch($fornecedor['ddd'])

            @case('31')
                BELO HORIZONTE - MG
                @break

            @case('11')
                SÃO PAULO - SP
                @break

            @case('32')
                JUIZ DE FORA - MG
                @break

            @default
                Estado não Identificado

        @endswitch
        <!-- Finaliza a estrutura switch -->
        
        @if($loop->first)
            <br/>
            Primeiro registro
        @endif 

        @if($loop->last)
        
            <br/>
            
             Último registro
            
            <br/>

           Número de Registros: {{$loop->count}}

        @endif
        <hr>

    @empty
        Nenhum item encontrado
 @endforelse   

 <h4>Escapando tag de impressão</h4>

        <!-- Basta colocar o '@' antes da das chaves -->
        Fornecedor: @{{$fornecedor['nome']}}
        <br/>

        Status: @{{$fornecedor['status']}}
        <br/>

        
        CNPJ: @{{ $fornecedor['cnpj'] ?? 'Não Preenchido'}}








    

