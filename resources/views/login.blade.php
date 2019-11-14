@extends('layouts.padrao')

@section('content')


        <div class="wrapper fadeInDown card-login">
                <div id="formContent">
                  <!-- Tabs Titles -->

                  <!-- Icon -->
                  <div class="fadeIn first">
                    <img class="starting-logo" alt="R3Cartola" src="/img/r3cartola-logo-2x.png" width="100px">
                  </div>

                  <!-- Login Form -->
                  <form method="GET" action="{{ route('pesquisaTime') }}">
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="senha" class="fadeIn third" name="login" placeholder="senha">
                    <input type="submit" class="fadeIn fourth" value="entrar">
                  </form>

                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu sua Senha ?</a>
                  </div>

                </div>
        </div>


@stop



