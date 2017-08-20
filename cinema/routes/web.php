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

Route::get('/', 'InicioController@index');

Route::get('/listafilmes/acao', 'ListaFilmesController@filmesAcao');
Route::get('/listafilmes/comedia', 'ListaFilmesController@filmesComedia');
Route::get('/listafilmes/animacao', 'ListaFilmesController@filmesAnimacao');
Route::get('/listafilmes/romance', 'ListaFilmesController@filmesRomance');
Route::get('/listafilmes/suspense', 'ListaFilmesController@filmesSuspense');
Route::get('/listafilmes/terror', 'ListaFilmesController@filmesTerror');

Route::get('/detalhes/{id}', 'SessaosController@detalhes');


Route::get('/areaadmin', function () {
    return view('areaAdmin.principal');
});

Route::get('/users/listar', 'UsersController@view');

Route::resource('/banners', 'BannersController');

Route::resource('/proximos', 'ProximosController');

Route::resource('/filmes', 'FilmesController');

Route::resource('/sessaos', 'SessaosController');

Route::resource('/users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
