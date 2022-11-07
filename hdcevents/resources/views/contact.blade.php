<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista contatos</title>
</head>
<body>
  <h1>Lista de contatos</h1>

  <ol>
    @for ($i = 0; $i < count($contatos); $i++)
      <li>{{ $contatos[$i] }}</li>
    @endfor 
  </ol>
  
  @php
    $teste = "meu codigo php";

    echo "<h1>" . $teste . "</h1>";
  @endphp
  <!-- comentário html -->
  {{--Este é um comentário blade, não aparece para as pessoas --}}

  <ul>
    @foreach ($contatos as $isolado)
      <li>{{ $isolado }} pos: {{ $loop->index }}</li>
    @endforeach
  </ul>
</body>
</html>

