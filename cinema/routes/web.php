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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('areaAdmin.principal');
});

Route::get('/users/listar', 'UsersController@view');

Route::resource('/filmes', 'FilmesController');

Route::resource('/sessaos', 'SessaosController');

Route::resource('/users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
