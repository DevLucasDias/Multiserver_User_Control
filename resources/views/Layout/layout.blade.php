<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Gestão de Usuários em Multiplos Servidores - SEG</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/css/solid.css">
    <link rel="stylesheet" href="css/fontawesome/css/regular.css">
    <script src="js/materialize.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="icons/material-icons.css">
    @livewireStyles


</head>

<body style="background-color: #F7F7F7">
@include('Layout.navbar')
    <div>
        <main>
            @yield('content')
            @yield('scripts')
        </main>
    </div>
    @livewireScripts
</body>

</html>
