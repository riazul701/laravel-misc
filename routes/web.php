<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Admin;

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

Route::get('get-users', function () {
    $users = User::select('*')->get();
    dd($users);
});

Route::get('get-users-2', function () {
    $users = User::select('*')->withoutGlobalScope(ActiveScope::class)->get();
    dd($users);
});

Route::get('get-admins', function () {
    $admins = Admin::select('*')->get();
    dd($admins);
});

Route::get('get-admins-2', function () {
    $admins = Admin::select('*')->withoutGlobalScope(ActiveScope::class)->get();
    dd($admins);
});
