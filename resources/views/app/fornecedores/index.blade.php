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

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)    
    <h3>Existem vários fornecedores</h3>
@else
    <h3> Não há fornecedores</h3>
@endif     

{{-- Uso de negação com '!' e @unless --}}

Fornecedor: {{$fornecedores [0]['nome']}}
<br/>
Status: {{$fornecedores [0]['status']}}

{{-- if/else com ! para negação, transformando o false em true --}}

@if( !($fornecedores[0]['status'] == 'S') )
    <h3>Fornecedor Inativo</h3>
@endif

{{-- @unless executa a negação invertendo o valor da condicional --}}

@unless(($fornecedores[0]['status'] == 'S'))
    <h3> Fornecedor Inativo</h3>
@endunless

