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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuario', 'UsuarioController@index');

Route::get('/usuario2', 'UsuarioController@index2');

Route::get('/heroi', 'HeroiController@index')->name('herois.list');

Route::get('/heroi/novo', 'HeroiController@create')->name('herois.novo');

Route::post('/heroi/salva-novo', 'HeroiController@store')->name('herois.salvanovo');



