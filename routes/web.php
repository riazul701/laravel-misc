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
})->name('home');

Route::get('flash-message-success', 'HomeController@create_success');
Route::get('flash-message-error', 'HomeController@create_error');
Route::get('flash-message-warning', 'HomeController@create_warning');
Route::get('flash-message-info', 'HomeController@create_info');
Route::get('flash-message-validate', 'HomeController@create_validate');
