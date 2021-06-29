<!doctype html>
<html lang="pt-br">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>@yield('titulo')</title>
    </head>
    <body>
        <nav class="teal darken-3">
            <div class="nav-wrapper container">
                <a href="#!" class="brand-logo">Biblioweb</a>
                <a href="#" data-target="mobile" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Início</a></li>
                    <li><a href="{{ route('admin.livros') }}">Livros</a></li>
                    <li><a href="{{ route('admin.categorias') }}">Categorias</a></li>
                </ul>
            </div>
        </nav>
        
        <ul class="sidenav" id="mobile">
            <li><a href="/">Início</a></li>
            <li><a href="{{ route('admin.livros') }}">Livros</a></li>
            <li><a href="{{ route('admin.categorias') }}">Categorias</a></li>
        </ul>