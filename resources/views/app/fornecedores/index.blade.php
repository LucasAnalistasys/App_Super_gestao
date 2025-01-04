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