<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
             
        <link rel="stylesheet" href="/css/style.css">        
    </head>
    <body class="antialiased">
        <h1 id="title">Algum titulo</h1>

        <img src="/img/banner.jpg" alt="banner">

        @if(10 > 5)
            <p>A condição é verdadeira</p>
        @endif

        <p>Meu nome é {{ $nome }}</p>

        @if($nome == "Helberte")
            <p>Estamos conversando com o {{ $nome }}</p>
            <p>Ele é {{ $estadoCivil }} mas está namorando e tem {{ $idade }} anos de idade, trabalha como {{ $profissao }}</p>
        @elseif($nome == "fulano")
            <p>Conversando com fulano</p>
        @endif

        <script src="/js/script.js"></script>
    </body>
</html>
