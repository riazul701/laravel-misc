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

Route::get('sms-callback', function () {
    return view('sms_callback');
});

Route::get('posts-store', function () {
    return view('posts_store');
});

Route::post('/sms/callback', function() {
    return "Text returned from /sms/callback";
});

Route::post('/posts/store', function () {
    return "Text returned from /posts/store";
});
