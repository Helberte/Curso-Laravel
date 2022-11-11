<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>   

    <!-- fonte do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- css da aplicação -->
    <link rel="stylesheet" href="/css/style.css"> 
    
    <!-- icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>

  </head>
  <body class="antialiased">
      
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
            <img src="/img/hdcevents_logo.svg" alt="logo">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    {{-- QUAL É A ÁREA DO CONTEÚDO? DEFINIMOS ATRAVÉS DO: --}}

   
    <main>
      <div id="container-msg" class="container-fluid">
        <div class="row">
          @if(session('msg'))
            <p id="msg" class="msg">{{ session('msg') }}</p>
         
          @endif
          @yield('content')
        </div>
      </div>
    </main>

    {{-- O BLADE SUBSTITUI O YIELD PELO CONTEÚDO --}}

    <footer>
      <p>HDC Events &copy; 2022</p>           
    </footer>

    <script src="/js/script.js" defer></script>
  </body>
</html>
