@extends('layouts.padrao')

@section('content')


        <div class="wrapper fadeInDown card-login">
                <div id="formContent">
                  <!-- Tabs Titles -->

                  <!-- Icon -->
                  <div class="fadeIn first">
                    <img src="img/logo.png" id="icon" alt="R3Sports Icon"/>
                  </div>

                  <!-- Login Form -->
                  <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                  </form>

                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                  </div>

                </div>
              </div>


@stop



