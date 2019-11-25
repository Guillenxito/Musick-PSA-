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

// MiControlador
Route::get('/login', 'MiControlador@login');
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

// Pide autentificacion para todas las paginas.
Auth::routes();

// AlbumController
Route::get('/autor/{artist}', 'AlbumController@authorJSON');
Route::get('/autor/{artist}/{album}', 'AlbumController@albumJSON');

// ReproductorController
Route::get('/play/album/{album}', 'ReproductorController@playAlbum');
Route::get('/play/cancion/{cancion}', 'ReproductorController@playCancion');
Route::get('/play/cancionesEstilo/{cancion}', 'ReproductorController@cancionesEstilo');
Route::get('/play/biblioteca', 'ReproductorController@biblioteca');

// PlayListController
Route::get('/biblioteca/album/{album}', 'PlayListController@bibliotecaAlbum');
Route::get('/biblioteca/cancion/{cancion}', 'PlayListController@bibliotecaCancion');
Route::get('/bibliotecaUsuario', 'PlayListController@bibliotecaJSON');
Route::get('/borrarBiblioteca/{cancion}', 'PlayListController@borrarBiblioteca');

// HomeController
Route::get('/', 'HomeController@home');
Route::get('/search/{wanted}', 'HomeController@searchInLiveJSON');
Route::get('/saberBuscado/{wanted}', 'HomeController@saberBuscado');
