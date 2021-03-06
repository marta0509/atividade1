<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/','App\Http\Controllers\FormController@index')->name('index');

Route::get('/entrada','App\Http\Controllers\FormController@index')->name('entrada');

Route::get('/empresa','App\Http\Controllers\FormController@empresa')->name('empresa');

Route::get('/noticias','App\Http\Controllers\FormController@empresa')->name('noticias');

Route::get('form','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');

Route::post('form','App\Http\Controllers\FormController@processarForm')->name('processar.form');

Route::get('/onde-estamos','App\Http\Controllers\FormController@ondeestamos')->name('onde.estamos');