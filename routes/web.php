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

//Route::get('items',['as'=>'items.index','uses'=>'ItemController@index']);
//Route::post('items/create',['as'=>'items.store','uses'=>'ItemController@store']);
//Route::get('items/edit/{id}',['as'=>'items.edit','uses'=>'ItemController@edit']);
//Route::patch('items/{id}',['as'=>'items.update','uses'=>'ItemController@update']);
//Route::delete('items/{id}',['as'=>'items.destroy','uses'=>'ItemController@destroy']);
//Route::get('items/{id}',['as'=>'items.view','uses'=>'ItemController@view']);

Route::resource('items', 'ItemController');
