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


use Illuminate\Support\Facades\Route;


Route::get('/items' , 'itemController@index');
Route::get('/items/create', 'itemController@create');
Route::post('/items', 'itemController@store');
Route::get('/pertanyaan',"PertanyaanController@index");
Route::get('/pertanyaan/create',"PertanyaanController@create");
Route::post('/pertanyaan/create',"PertanyaanController@store");

Route::get('/jawaban/{pertanyaan_id}',"JawabanController@index");
Route::post('/jawaban/{pertanyaan_id}',"JawabanController@store");
