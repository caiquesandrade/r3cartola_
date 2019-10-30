<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/times.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            p {
                font-size: 2em;

            }

        </style>
    </head>
    <body>

        <h1>Busque seu time aqui !</h1>
        <form method="GET" action="{{ route('buscartime') }}">

            <input type="text" name="name" placeholder="Nome do Time">

            <button id="btn-buscar" type="submit">Enviar</button>


        </form>


</body>
</html>


