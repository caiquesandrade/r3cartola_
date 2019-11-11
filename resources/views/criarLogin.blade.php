@extends('layouts.padrao')

@section('content')


        <div class="wrapper fadeInDown card-login">
                <div id="formContent">

                  <!-- Icon -->
                  <div class="fadeIn first">
                    <img class="starting-logo" alt="R3Cartola" src="/img/r3cartola-logo-2x.png" width="100px">
                  </div>

                  <!-- Criar Login Formulário -->
                  <form action="POST">
                    <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="nome">
                    <input type="text" id="cpf" class="fadeIn third" name="cpf" placeholder="cpf">
                    <input type="text" id="celular" class="fadeIn third" name="celular" placeholder="celular">
                    <input type="email" id="email" class="fadeIn third" name="email" placeholder="email">
                    <input type="email" id="confirmar-email" class="fadeIn third" name="confirmar-email" placeholder="confirmar-email">
                    <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="senha">
                    <input type="password" id="confirmar-senha" class="fadeIn third" name="confirmar-senha" placeholder="confirmar-senha">
                    <input type="submit" class="fadeIn fourth" value="cadastrar">
                  </form>

                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Esqueceu sua Senha ?</a>
                  </div>

                </div>
        </div>


@stop



