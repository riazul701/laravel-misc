<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;
use App\UserRole;

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

Route::get('get-role', function () {
    $user = User::find(1);

    dd($user->roles);
});

Route::get('get-user', function () {
    $role = Role::find(1);

    dd($role->users);
});

Route::get('attach', function () {
    $user = User::find(2);

    $roleIds = [1, 2];
    $user->roles()->attach($roleIds);
});

Route::get('sync', function () {
    $user = User::find(3);

    $roleIds = [1, 2];
    $user->roles()->sync($roleIds);
});

Route::get('attach-2', function() {
    $role = Role::find(1);

    $userIds = [10, 11];
    $role->users()->attach($userIds);
});

Route::get('sync-2', function () {
    $role = Role::find(2);

    $userIds = [10, 11];
    $role->users()->sync($userIds);
});
