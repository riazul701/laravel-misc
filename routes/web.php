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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
//    $users = User::select('*')->get();
//    return $users;

//    $admins = Admin::select('*')->get();
//    return $admins;

//    $users = User::select('*')->withoutGlobalScope(ActiveScope::class)->get();
//    return $users;

    $admins = Admin::select('*')->withoutGlobalScope(ActiveScope::class)->get();
    return $admins;
});
