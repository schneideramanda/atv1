<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ATV1 - Laravel</title>

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="container">
          <header>
          <img src="{{ asset('assets/ursos-sem-curso.png') }}" alt="ursos sem curso">
          </header>
          <h1 class="titulo">Introdução Framework Laravel</h1>
          <div class="bg-nome">
            <p class="nome">Olá, {{$nome}}!</p>
          </div>
        </div>
    </body>
</html>
