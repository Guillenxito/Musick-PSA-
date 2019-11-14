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
/*
Route::get('/', function () {
    return view('welcome');
});
*/




Route::get('/', 'HomeController@home');


Route::get('/login', 'MiControlador@login');


Route::get('/user/show/{id}', 'UserController@show');
Route::get('/users/showAll', 'UserController@showAll');
Route::get('/user/destroy/{id}', 'UserController@destroy');


Auth::routes();//Con esto se pide autentificacion para todas las paginas.


// Route::get('/autor/{artist}', 'AlbumController@showArtist');
// Route::get('/autor/{artist}/{album}', 'AlbumController@showAlbum');
Route::get('/autor/{artist}', 'HomeController@authorJSON');
Route::get('/autor/{artist}/{album}', 'HomeController@albumJSON');



Route::post('biblioteca/AddSong', 'PlaylistController@store');
// Route::get('biblioteca/AddSong', 'PlaylistController@store'); para probar facil



/* Intentos sin form y con una peticion ajax por post
Route::middleware('auth:api')->post('biblioteca/AddSong', 'BibliotecaController@AddSong');

Route::middleware('auth:api')->post('reproductor/play', 'ReproductorController@play');

Route::group([
    'middleware' => 'auth',
], function () {
    Route::post('reproductor/play', 'ReproductorController@play');
});
*/
