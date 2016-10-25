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

Route::get('plantilla', function(){
return view('template.main');
});
Route::get('eventicos', function(){
return view('template.eventos');
});

Route::get('fotorama', function () {
    return view('admin.eventos.index');
});
//Route::delete('eventos/{evento}/destroy',
	//['uses'=>'EventosController@destroy',
	//'as'=>'eventos.destroy']);


//rutas para los centros
Route::get('centros/{id}/destroy',[
	'uses' => 'CentrosController@destroy',
	'as' => 'centros.destroy1']);



//rutas para los albums

Route::get('album/{id}/edit',[
	'uses' => 'AlbumController@edit',
	'as' => 'album.edit1']);

Route::get('album/{id}/destroy',[
	'uses' => 'AlbumController@destroy',
	'as' => 'album.destroy1']);

//rutas para las categorias
Route::get('categoria/{id}/edit',[
	'uses' => 'CategoriasController@edit',
	'as' => 'categoria.edit1']);
Route::get('categoria/{id}/destroy',[
	'uses' => 'CategoriasController@destroy',
	'as' => 'categoria.destroy1']);

Route::get('eventos/{id}/destroy',[
	'uses' => 'EventosController@destroy',
	'as' => 'eventos.destroy1']);
Route::get('eventos/{id}/edit',[
	'uses' => 'EventosController@edit',
	'as' => 'eventos.edit1']);

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);
Auth::routes();
Route::resource('buscar','BuscarController');
Route::resource('imagen','ImagesController');
Route::resource('imagenes','FileController');
Route::resource('album','AlbumController');
Route::resource('eventos','EventosController');
Route::resource('centros','CentrosController');
Route::resource('categoria','CategoriasController');
Route::get('/home', 'HomeController@index');
Route::post('imagenes', ['as' => 'imagenes.store', 'uses' => 'FileController@store']);
