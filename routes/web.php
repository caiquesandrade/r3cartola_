<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'TimesController@index')->name('index');
    Route::get('/login', 'TimesController@login')->name('login');
    Route::get('/pesquisatime', 'TimesController@pesquisaTime')->name('pesquisaTime');
    Route::get('/buscartime', 'TimesController@buscarTime')->name('buscarTime');
    Route::get('/criar-login', 'TimesController@criarLogin')->name('criarLogin');
    Route::post('/criar-login', 'TimesController@store')->name('criarLogin.store');

});


