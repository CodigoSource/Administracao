<!doctype html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script type="text/javascript" >

        $( document ).ready(function() {
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
        });

    </script>
</head>
<body>
<nav>
    <div class="nav-wrapper light-blue darken-4">
        <a href="{{route('home')}}" class="brand-logo">CodeSoft</a>

        <ul class="right hide-on-med-and-down">
            <li>
                <a class="dropdown-button" href="#" data-activates="dropadm">Administração
                    <i class="material-icons right">folder</i>
                </a>
            </li>

            <li>
                <a class="dropdown-button" href="#" data-activates="dropcont">Contratos
                    <i class="material-icons right">folder</i>
                </a>
            </li>

            <li>
                <a class="dropdown-button" href="#" data-activates="dropfinanc">Financeiro
                    <i class="material-icons right">folder</i>
                </a>
            </li>

            <li>
                <a class="dropdown-button" href="#" data-activates="dropdoc">Documentos
                    <i class="material-icons right">folder</i>
                </a>
            </li>

            @auth
            <li>
                <a class="dropdown-button" href="#" data-activates="dropuser">{{Auth::user()->name}}
                    <i class="material-icons right">account_circle</i>
                </a>
            </li>
                @endauth
        </ul>
    </div>
</nav>

<ul id="dropadm" class="dropdown-content">
    <li><a href="{{route('pessoas')}}">Pessoas</a></li>
    <li><a href="#">Usuários</a></li>
    <li><a href="#">Produtos</a></li>
    <li class="divider"></li>
    <li><a href="#">Operações</a></li>
    <li class="divider"></li>
    <li><a href="#">Forma pgto.</a></li>
    <li><a href="#">Condição pgto.</a></li>
</ul>

<ul id="dropcont" class="dropdown-content">
    <li><a href="#">Sites</a></li>
    <li><a href="#">Faturamento</a></li>
</ul>

<ul id="dropfinanc" class="dropdown-content">
    <li><a href="#">Receber</a></li>
    <li><a href="#">Pagar</a></li>
    <li class="divider"></li>
    <li><a href="#">Hoje</a></li>
</ul>

<ul id="dropuser" class="dropdown-content">
    <li><a href="#">Perfil</a></li>
    <li class="divider"></li>
    <li><a href="#">Sair</a></li>
</ul>

<ul id="dropdoc" class="dropdown-content">
    <li><a href="#">Emitidos</a></li>
    <li><a href="#">Recebidos</a></li>
</ul>

<div>
    @yield('content')
</div>
@yield('script')
</body>
</html>