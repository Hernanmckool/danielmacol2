<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('/', function () {
    return view('welcome');
});
*/
 
Route::get('/','FrontController@index');
Route::get('admin','FrontController@admin');
Route::get('logout','LoginController@logout');
Route::resource('usuario','UsuarioController');
Route::resource('secciones','SeccionesController');
Route::resource('categorias','CategoriasController');
Route::resource('login','LoginController');

