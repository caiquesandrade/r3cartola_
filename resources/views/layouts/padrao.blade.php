<!DOCTYPE html>
<html lang="pt-br">
<head>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>R3Cartola</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="../favicon.ico">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-color fixed-top">
            <a class="navbar-brand" href="{{route('index')}}">
                <img class="starting-logo default-logo" alt="R3Cartola" src="/img/r3cartola-logo-2x.png" width="100px">
            </a>
            <button class="navbar-toggler" id="btn-bar" data-target="#navbarNav" data-toggle="collapse">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav" style="margin-left: 20em;">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        Ligas R3Cartola
                    </a>
                </li>
               <li class="nav-item" >
                    <a class="nav-link" href="{{route('login')}}" style="margin-left: 20em;">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('criarLogin')}}">
                        Criar conta
                    </a>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <footer class="footer">
                <div class="container" style="padding-top: 8px;">
                  <div class="row mb-1 mt-3" style="font-size:14px">
                      <div class="col-12 col-lg-3 mb-3" style="text-align:center">
                        <a href="index" style="color:#ffffff">
                            <img alt="R3sports" src="https://r3sports.esp.br/wp-content/uploads/2019/09/logo.png" srcset="https://r3sports.esp.br/wp-content/uploads/2019/09/logo.png 1x, https://r3sports.esp.br/wp-content/uploads/2019/09/logoRetina.png 2x">
                        </a>
                    </div>
                    <div class="col-12 col-lg-3 mb-3 text-left">
                          <h5><b>Serviços R3sports</b></h5>
                          <a href="https://r3sports.esp.br/" target="_blank" style="color:#ffffff">R3 Sports</a>
                          <br><a href="https://www.youtube.com/channel/UCmnXnDXL7qAw9YL8wF78bog/videos?view_as=subscriber" target="_blank" style="color:#ffffff">Assine Nosso Canal no YouTube</a>
                      </div>


                      <div class="col-12 col-lg-3 mb-3 text-left">
                          <h5><b>Ajuda</b></h5>
                          Email: <a href="mailto:contato@r3sports.com.br" style="color:#ffffff">contato@r3sports.com.br</a>
                          <br>Regras: <a href="https://r3cartola.com.br/regras.html" style="color:#ffffff">Baixe agora!</a>
                      </div>

                      <div class="col-12 col-lg-3 mb-3 text-left">
                          <h5><b>Outros</b></h5>
                          <a href="https://r3cartola.com.br/politica-privacidade.html" style="color:#ffffff">Política de Privacidade</a>
                          <br><a href="https://r3cartola.com.br/termos-e-condicoes.html" style="color:#ffffff">Termos e Condições de Uso</a>
                      </div>
                  </div>
                </div>
                <div class="container fonte-size">
                        Copyright (c) 2019 @R3Cartola | R3Cartola
                    </div>
              </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{ asset('js/times.js') }}"></script>
    </body>
</html>
