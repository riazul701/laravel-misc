<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Comment;

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

Route::get('display-post', function () {
    $posts = Post::all();

    foreach ($posts as $post) {
        echo $post->name . '<br />';

        $comments = $post->comments;
        /* You can write loop again  */
    }
});

Route::get('display-post-with-eager-loading', function () {
    $posts = Post::with('comments')->get();

    foreach ($posts as $post) {
        echo $post->name . '<br />';

        $comments = $post->comments;
        /* You can write loop again  */
    }
});
