<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Canciones</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
</head>
<body class="antialiased">
    <div class="content">
        <div class="title">
            Bienvenido Al Formulario de Canciones
        </div>

        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Logueate</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrate</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>

