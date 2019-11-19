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


Route::get('/', 'HomeController@home');

Route::get('/login', 'MiControlador@login');
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

// UserController
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/users/showAll', 'UserController@showAll');
Route::get('/user/destroy/{id}', 'UserController@destroy');

Auth::routes();//Con esto se pide autentificacion para todas las paginas.


Route::post('biblioteca/AddSong', 'PlaylistController@store');
// Route::get('biblioteca/AddSong', 'PlaylistController@store'); para probar facil

// AlbumController
Route::get('/autor/{artist}', 'AlbumController@authorJSON');
Route::get('/autor/{artist}/{album}', 'AlbumController@albumJSON');
Route::get('/bibliotecaUsuario', 'AlbumController@bibliotecaJSON');

// ReproductorController
Route::get('/play/album/{album}', 'ReproductorController@playAlbum');
Route::get('/play/cancion/{cancion}', 'ReproductorController@playCancion');
Route::get('/biblioteca/album/{album}', 'ReproductorController@bibliotecaAlbum');
Route::get('/biblioteca/cancion/{cancion}', 'ReproductorController@bibliotecaCancion');

// HomeController
Route::get('/search/{wanted}', 'HomeController@searchInLiveJSON');
