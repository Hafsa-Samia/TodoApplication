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


Route::get('/index','TodoController@index');

Route::post('/add', 'TodoController@store');
Route::post('/update', 'TodoController@edit');
Route::post('/delete', 'TodoController@deleted');


