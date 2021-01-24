<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Video;
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

Route::get('create-post-comment', function () {
    $post = Post::find(1);

    $comment = new Comment;
    $comment->body = "Hi ItSolutionStuff.com";

    $post->comments()->save($comment);
});

Route::get('create-video-comment', function () {
    $video = Video::find(1);

    $comment = new Comment;
    $comment->body = "Hi ItSolutionStuff.com";

    $video->comments()->save($comment);
});

Route::get('get-post-comment', function () {
    $post = Post::find(1);

    dd($post->comments);
});

Route::get('get-video-comment', function () {
    $video = Video::find(1);

    dd($video->comments);
});
