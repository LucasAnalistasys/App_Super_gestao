<h3>Fornecedores</h3>

{{-- Comentário dentro de blades que será descarto na renderização da view --}}


{{-- Uso de blocos php na view - START --}}

@php
    /* @if/else em php puro

    if(){

    } elseif(){

    } else {

    }

    */
@endphp


{{-- if/else em blade --}}

@if(isset($fornecedores) && count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores</h3>
    @elseif(isset($fornecedores) && count($fornecedores) > 10)    
        <h3>Existem vários fornecedores</h3>
    @else
        <h3> Não há fornecedores</h3>
@endif     

@php
    /* 
        if(isset($variavel)){} => retorna true se a variavel estiver definida
    */
@endphp
{{-- usando @isset --}}
{{-- Uso de negação com '!' e @unless --}}

@isset($fornecedores)

    Fornecedor: {{$fornecedores [0]['nome']}}
    <br/>
    Status: {{$fornecedores [0]['status']}}

@endisset

{{-- if/else com ! para negação, transformando o false em true --}}

@isset($forncedores [0])

    @if((!($fornecedores[0]['status'] == 'S'))  )
        <h3>Fornecedor Inativo</h3>
    @endif

@endisset

{{-- @unless executa a negação invertendo o valor da condicional --}}

@isset($fornecedores [0])

    @unless($fornecedores[0]['status'] == 'S')
        <h3> Fornecedor Inativo</h3>
    @endunless

@endisset







