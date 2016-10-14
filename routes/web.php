<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('fotorama', function () {
    return view('template.eventos.index');
});

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);
Auth::routes();
Route::resource('imagenes','FileController');
Route::resource('album','AlbumController');
Route::resource('eventos','EventosController');
Route::resource('centros','CentrosController');
Route::resource('categoria','CategoriasController');
Route::get('/home', 'HomeController@index');
Route::post('imagenes', ['as' => 'imagenes.store', 'uses' => 'FileController@store']);
