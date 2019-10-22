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

Route::get('barang', 'BarangController@index');
Route::post('barang','BarangController@store');
Route::delete('barang/{id}', 'BarangController@delete');

Route::get('ruang', 'RuangController@index');
Route::post('ruang','RuangController@store');
Route::delete('ruang/{id}', 'RuangController@delete');

Route::get('user', 'UserController@index');
Route::post('user','UserController@store');
Route::delete('user/{id}', 'UserController@delete');

