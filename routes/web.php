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

Route::get('get-comment', function () {
    $post = Post::find(1);

    $comments = $post->comments;

    dd($comments);
});

Route::get('get-post', function () {
    $comment = Comment::find(1);

    $post = $comment->post;

    dd($post);
});

Route::get('create-comment', function () {
    $post = Post::find(1);

    $comment = new Comment;
    $comment->comment = "Hi ItSolutionStuff.com";

    $post = $post->comments()->save($comment);
});

Route::get('create-comment-2', function () {
    $post = Post::find(1);

    $comment1 = new Comment;
    $comment1->comment = "Hi ItSolutionStuff.com Comment 1";

    $comment2 = new Comment;
    $comment2->comment = "Hi ItSolutionStuff.com Comment 2";

    $post = $post->comments()->saveMany([$comment1, $comment2]);
});

Route::get('associate', function () {
    $comment = Comment::find(1);
    $post = Post::find(2);

    $comment->post()->associate($post)->save();
});
