<?php

use Illuminate\Support\Facades\Route;
use App\Game;

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
//    return view('welcome');
//    return Game::nintendo()->get();
    return Game::nintendo()->where('title', 'like', '%Mario%')->get();
});

Route::get('games', function () {
//    $games = App\Game::all();
    $games = Game::all();
//    return view('games.index', ['games' => $games]);
    return $games;
});

Route::get('games/{id}', function ($id) {
    $game = Game::find($id);
    return view('games.show', ['game' => $game]);
});

Route::get('games_where', function () {
    $games = Game::where('id', '>', 3)->get();
    return $games;
});

Route::get('games_where2', function () {
    $games = Game::where('title', 'like', '%Mega%')->get();
    return $games;
});

Route::get('games_where3', function () {
    $games = Game::where('publisher', '=', 'Nintendo')->get();
    return $games;
});

Route::get('games_where4', function () {
    $games = Game::where('releasedate', '=', 1989)->get();
    return $games;
});

Route::get('games_orderby', function () {
    $games = Game::orderBy('id', 'desc')->get();
    return $games;
});

Route::get('games_take', function () {
    $games = Game::orderBy('releasedate', 'desc')->take(3)->get();
    return $games;
});

Route::get('games_pluck', function () {
    $games = Game::pluck('title');
    return $games;
});

Route::get('games_take2', function () {
    $games = Game::where('publisher', '=', 'Nintendo')->orderBy('releasedate', 'desc')->take(3)->get();
    return $games;
});
