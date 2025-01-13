<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <!-- Aqui o Yield está alterando o title da página de acordo com o valor de 'titulo', 
        que é uma variável podendo alterar o titulo da página baseado nessa variável --> 

        <title>
        Super Gestão - @yield('titulo') 
        </title>
        
        <meta charset="utf-8">
        <link rel="stylesheet"  href={{ asset('css/estilo_basico.css')}} >
        
    </head>

    <body>

        @include('site.layouts._partials.topo') <!-- O Include pega todo conteúdo de uma blade especifica, 
        e o aplica em uma parte especifica de outra blade. Nesse caso, o conteúdo da blade topo está sendo
        inserido aqui, e como esse é o template que está sendo aplicado em todas as outras blades principais,
        por consquência esse include também foi aplicado, que contém a parte do menu. -->

        @yield('conteudo') <!-- O Yield serve para recuperar a informação que esta vindo de outra blade,
        através do parâmetro definido. Nesse caso, o parâmetro 'conteudo' estara trazendo o conteúdo de
        outras blades que será impresso aqui -->

    </body>
</html>