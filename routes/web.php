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
Route::get('/home', 'MiControlador@home');
Route::get('/login', 'MiControlador@login');


Route::get('/user/show/{id}', 'UserController@show');
Route::get('/users/showAll', 'UserController@showAll');
