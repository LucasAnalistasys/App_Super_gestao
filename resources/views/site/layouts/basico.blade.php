<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>

        Super Gestão - @yield('titulo') <!-- Aqui o Yield está alterando o title da página de acordo com o valor de 'titulo', 
        que é uma variável podendo alterar o titulo da página baseado nessa variável --> 
        
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"  href={{ asset('css/estilo_basico.css')}} >
        
    </head>

    <body>

        @yield('conteudo') <!-- O Yield serve para recuperar a informação que esta vindo de outra blade,
        através do parâmetro definido. Nesse caso, o parâmetro 'conteudo' estara trazendo o conteúdo de
        outras blades que será impresso aqui -->

    </body>
</html>