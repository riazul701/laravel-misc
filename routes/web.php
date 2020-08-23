<?php

use Illuminate\Support\Facades\Route;
use App\User;

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
    /* Queries Tab */
//    User::get();

    /* Messages Tab */
//    $users = User::get();
//    DebugBar::info($users);
//    Debugbar::error("Error");
//    Debugbar::warning("Warning");
//    Debugbar::addMessage("message", "label");

    /* Timeline Tab */
//    Debugbar::startMeasure('query_time', 'The execution time of user query');
//    $users = User::get();
//    Debugbar::stopMeasure('query_time');

    /* Exceptions Tab */
//    try {
//        throw new Exception('This is Exception');
//    } catch (Exception $e) {
//        Debugbar::addException($e);
//    }

    /* Enable/Disable Debugbar */
//    Debugbar::disable();
//    Debugbar::enable();

    return view('welcome');
});
