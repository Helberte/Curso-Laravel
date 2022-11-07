<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>   

    <link rel="stylesheet" href="/css/style.css"> 
    <script src="/js/script.js" defer></script>     
       
  </head>
  <body class="antialiased">
      
    {{-- QUAL É A ÁREA DO CONTEÚDO? DEFINIMOS ATRAVÉS DO: --}}

    @yield('content')

    {{-- O BLADE SUBSTITUI O YIELD PELO CONTEÚDO --}}

    <footer>
      <p>HDC Events &copy; 2022</p>           
    </footer>
    
  </body>
</html>
