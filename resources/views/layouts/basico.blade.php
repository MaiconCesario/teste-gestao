<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href={{asset('csss/estilo_basico')}}>
    </head>

    <body>
        @include('layouts._partials.topo')
        @yield('conteudo')
    </body>