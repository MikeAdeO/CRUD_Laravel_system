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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/user', function () {
 //   return view('add-user');
//});

Route::get('/', 'UserController@index');
Route::get('/add-user', 'UserController@create');
Route::post('/user-add', 'UserController@store');
Route::get('user/delete/{id}', 'UserController@delete');
Route::get('user/edit/{id}', 'UserController@edit');
Route::post('user/update/{id}', 'UserController@update');

