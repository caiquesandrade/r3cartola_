<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        <p>Busque seu time aqui !</p>
        <form>
            <input type="text"/>
            <button type="submit" >Buscar</button>
        </form>
    </body>
</html>
