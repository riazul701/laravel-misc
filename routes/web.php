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

//Route::get('simple-route', function () {
//    return 'This is Simple Route Example of ItSolutionStaff.com';
//});

//Route::view('my-route', 'index');

//Route::get('my-route', 'TestController@index');

//Route::get('users/{id}', 'UserController@show');

Route::get('users', 'UserController@index');
Route::post('users', 'UserController@post');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');
