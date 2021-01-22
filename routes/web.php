<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Phone;

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

Route::get('/phone', function () {
    $phone = User::find(1)->phone;
    dd($phone);
});

Route::get('/user', function () {
    $user = Phone::find(1)->user;
    dd($user);
});

Route::get('/insert-phone', function () {
    $user = User::find(1);

    $phone = new Phone;
    $phone->phone = '9429343852';

    $user->phone()->save($phone);
});

Route::get('associate-user', function () {
    $phone = Phone::find(1);

    $user = User::find(10);

    $phone->user()->associate($user)->save();
});
