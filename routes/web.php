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

Route::get('/index_customer','CustomerController@index');
Route::post('/add_customer','CustomerController@store');
Route::post('/update_customer','CustomerController@edit');
Route::post('/delete_customer','CustomerController@delete');





