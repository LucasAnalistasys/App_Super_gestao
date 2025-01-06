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
@isset($fornecedores)
    
    Fornecedor: {{$fornecedores [0]['nome']}}
    <br/>
    Status: {{$fornecedores [0]['status']}}
    <br/>
    CNPJ: {{$fornecedores [0]['cnpj']}}
    <br/>
    ________________________________________________
    <br/><br/>

    Fornecedor: {{$fornecedores [1]['nome']}}
    <br/>
    Status: {{$fornecedores [1]['status']}}
    <br/>

    @isset($fornecedores[1]['cnpj'])

        CNPJ: {{ $fornecedores [1]['cnpj'] ?? 'Não Preenchido'}}

        @empty($fornecedores[1]['cnpj'])
            Vazio
        @endempty    

    @endisset
  

    <br/><br/>
    ________________________________________________

    <br/><br/>

    Fornecedor: {{$fornecedores [2]['nome']}}
    <br/>

    Status: {{$fornecedores [2]['status']}}

    <br/>

    CNPJ: {{ $fornecedores [2]['cnpj'] ?? 'Não Preenchido'}}
    <!-- verifica se Variável testada está definida (isset)
         ou
         Verifica se Variável testada retorna valor null
    -->
    <br/>
    TELEFONE: ({{$fornecedores[2]['ddd']}}) {{$fornecedores[2]['telefone']}}
<br/>
    ESTADO:
    <!-- Estrutura switch para identificar o estado com base no DDD do terceiro fornecedor -->
    @switch($fornecedores[2]['ddd'])

        <!-- Caso o DDD seja '31', identifica como Belo Horizonte - MG -->
        @case('31')
            BELO HORIZONTE - MG
            @break

        <!-- Caso o DDD seja '11', identifica como São Paulo - SP -->
        @case('11')
            SÃO PAULO - SP
            @break

        <!-- Caso o DDD seja '32', identifica como Juiz de Fora - MG -->
        @case('32')
            JUIZ DE FORA - MG
            @break

        <!-- Se o DDD não for identificado, exibe "Estado não Identificado" -->
        @default
            Estado não Identificado

    @endswitch
    <!-- Finaliza a estrutura switch -->
@endisset     
    

