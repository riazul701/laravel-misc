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

Route::get('/', function () {
    return view('welcome');
});

Route::get('create-1', 'HomeController@create_1');
Route::get('create-2', 'HomeController@create_2');
Route::get('create-3', 'HomeController@create_3');
Route::get('create-4', 'HomeController@create_4');
