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

        CNPJ: {{$fornecedores [1]['cnpj']}}

        @empty($forncedores[1]['cnpj'])
            Vazio
        @endempty    

    @endisset
@endisset