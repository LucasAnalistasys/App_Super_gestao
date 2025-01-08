@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>
            <!-- Passando um action para o form contendo a route da propria pagina de contato -->
            <!-- Adicionado o atributo name a cada campo do form -->
            <div class="informacao-pagina">
                <div class="contato-principal">
                  
                  @component('site.layouts._components.form_contato', ['classe' => 'borda-preta']) <!-- o parâmetro do array associativo cria uma variavel chamada classe, e atribui a ela o valor contendo a cor da borda, puxando a classe css da mesma -->
                       <!-- Enviado essas informações, elas podem ser recuperadas no componente
                       através do uso do @{{ $slot }} -->
                    <p>Deixe sua Mensagem e responderemos o mais breve possível.</p>
                    <p>Tempo médio de resposta: 48 Horas</p>
                  @endcomponent  
                </div>
            </div>  
        </div>

        @include('site.layouts._partials.rodape')
        
@endsection