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


    

