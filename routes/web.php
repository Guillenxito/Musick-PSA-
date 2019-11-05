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


Route::get('/', 'MiControlador@index');
// Route::get('/home', 'MiControlador@home');

Route::get('/login', 'MiControlador@login');


Route::get('/user/show/{id}', 'UserController@show');
Route::get('/users/showAll', 'UserController@showAll');
Route::get('/user/destroy/{id}', 'UserController@destroy');


Auth::routes();//Con esto se pide autentificacion para todas las paginas.

// Route::get('/album/show/{id}', 'AlbumController@show');
Route::get('/{artist}', 'AlbumController@showArtist');
Route::get('/{artist}/{album}', 'AlbumController@showAlbum');

Route::get('/home', 'HomeController@home');

Route::post('reproductor/play/{id}', 'ReproductorController@play');
