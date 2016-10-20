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
*/
Route::get('/', 'inicioController@temp');
Route::get('opcion2', 'inicioController@opcion2');
Route::get('modelos', 'inicioController@getArtic');
Route::get('verPedido', 'inicioController@verPedido');
Route::get('descarga', 'inicioController@descargaArchivo');
Route::get('guardar', 'inicioController@guardarCampo');
Route::get('mail', 'inicioController@sendMail');
Route::get('preview', 'inicioController@preView');
Route::get('nota', function(){  return view('nota');});
Route::get('coleccion', 'inicioController@colleccion');
Route::get('muestraImagen', 'EditorController@muestraImagen');
Route::get('creaCodigo', 'inicioController@codigoReferido');
Route::get('codigoTodos', 'inicioController@codigoTodos');
Route::get('getVendors', 'EditorController@getVendors');
Route::get('getModels', 'EditorController@getModels');
Route::get('getModelImages', 'EditorController@getModelImages');
//Route::get('imagen', 'inicioController@muestraImagen');