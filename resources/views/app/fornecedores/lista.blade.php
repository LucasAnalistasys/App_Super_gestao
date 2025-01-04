<h3>Lista de Fornecedores</h3>

{{-- 

@isset($variavel)
    <!-- O código dentro deste bloco será executado se a variável estiver definida e não for null -->
@endisset

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
    @isset($forncedores[1]['cnpj'])
        CNPJ: {{$fornecedores [1]['cnpj']}}
    @endisset
@endisset