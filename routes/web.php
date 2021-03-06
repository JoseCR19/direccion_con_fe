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

Route::get('/', function () {
    return view('welcome');
});

Route::get('objetivos',['as'=>'objetivo','uses'=>'ObjetivoController@index']);
Route::get ('ob/create',['as'=>'objetivo-create','uses'=>'ObjetivoController@create']);
Route::post ('ob/meta',['as'=>'metas','uses'=>'MetaController@metasObEm']);
Route::post ('ob/guardar',['as'=>'objetivo-guardar','uses'=>'ObjetivoController@store']);
