<?php


header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

function sendRequest($path, $options = array()){
  $options = array_merge(array(
    'base' => 'https://api.cartolafc.globo.com/',
    'body' => false,
    'token' => false
  ), $options);
  $c = curl_init();
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($c, CURLOPT_URL, $options['base'] . $path);
  if($options['body']){
    curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, json_encode($options['body']));
  } else {
    curl_setopt($c, CURLOPT_FRESH_CONNECT, true);
  }
  if($options['token']){
    curl_setopt($c, CURLOPT_HTTPHEADER, array('X-GLB-Token: ' . $options['token']));
    curl_setopt($c, CURLOPT_VERBOSE, false);
  }
  $result = curl_exec($c);
  curl_close($c);
  return $result;
}
function login($login, $password){
  $body = array('payload' => array(
    'email' => $login,
    'password' => $password,
    'serviceId' => 4728
  ));
  return sendRequest('authentication', array(
    'base' => 'https://login.globo.com/api/',
    'body' => $body
  ));
}
function api($arguments){
  unset($arguments['p']);
  $path = $_GET['p'] . '?' . http_build_query($arguments);
  $results = sendRequest($path, array(
    'token' => isset($_GET['token']) ? $_GET['token'] : false,
    'body' => !empty($_POST) ? $_POST : false
  ));
  if(trim($results) == '404 page not found') {
    header('HTTP/1.0 404 Not Found');
  }
  echo $results;
}
if(isset($_GET['p'])){
  if($_GET['p'] == 'login' && isset($_GET['login']) && isset($_GET['password'])){
    echo login($_GET['login'], $_GET['password']);
  } else {
    echo api($_GET);
  }
}
