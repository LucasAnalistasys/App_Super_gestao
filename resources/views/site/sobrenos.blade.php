@extends('site.layouts.basico') <!-- O Extends irá usar um layout ou template para imprimir um bloco de codigo vindo de outra blade -->

<!-- O Section encapsula o conteúdo para ser passado como parâmetro para o template.-->


@section('titulo', 'Sobre Nós') <!-- Nesse caso, está sendo passado um parâmetro para alterar o título do site.
A Sintaxe será Section('Nome da variável', 'Valor atribuido a variável') -->

@section('conteudo') <!-- Aqui a section tem um fechamento, pois está encapsulando todo conteúdo dentro dela que será passado para o layout ou template -->

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Olá, eu sou o Super Gestão</h1>
            </div>

            <div class="informacao-pagina">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
            </div>  
        </div>

       @include('site.layouts._partials.rodape')

@endsection        
   