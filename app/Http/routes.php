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
 
Route::get('poema','FrontPoemasController@index');
Route::get('pintura','FrontPinturasController@index');
Route::get('admin','FrontPoemasController@admin');
Route::get('logout','LoginController@logout');
Route::get('index_articulos_poemas/{id}','FrontPoemasController@article');
Route::get('index_articulos_pinturas/{id}','FrontPinturasController@article');
Route::get('articulos/{id}/show','ArticulosController@show');
Route::get('usuario/{id}/eliminar','UsuarioController@eliminar');
Route::get('usuario/{id}/cambiar','UsuarioController@cambiar');
Route::get('pinturas/{id}/eliminar','PinturasController@eliminar');
Route::get('secciones/combo','SeccionesController@combo');
Route::get('secciones/listing','SeccionesController@listing');
Route::get('categorias/listing','CategoriasController@listing');
Route::get('articulos/listing','ArticulosController@listing');
Route::get('usuario/listing','UsuarioController@listing');
Route::get('categorias/combo','CategoriasController@combo');
Route::get('secciones/{id}/{dato}/editar','SeccionesController@editar');
Route::get('categorias/{id}/{dato}/editar','CategoriasController@editar');
Route::get('articulos/{id}/{dato}/editar','ArticulosController@editar');
Route::get('pinturas/{id}/{dato}/editar','PinturasController@editar');
Route::get('usuario/{id}/{dato}/editar','UsuarioController@editar');
Route::resource('usuario','UsuarioController');
Route::resource('secciones','SeccionesController');
Route::resource('categorias','CategoriasController');
Route::resource('articulos','ArticulosController');
Route::resource('pinturas','PinturasController');
Route::resource('login','LoginController');

