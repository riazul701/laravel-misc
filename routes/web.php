<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Tag;
use App\User;
use App\Video;

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

// Create Records
Route::get('create-post-tag', function () {
    $post = Post::find(1);

    $tag = new Tag;
    $tag->name = "ItSolutionStuff.com";

    $post->tags()->save($tag);
});

Route::get('create-video-tag', function () {
    $video = Video::find(1);

    $tag = new Tag;
    $tag->name = "ItSolutionStuff.com";

    $video->tags()->save($tag);
});

Route::get('create-multi-post-tag', function () {
    $post = Post::find(1);

    $tag1 = new Tag;
    $tag1->name = "ItSolutionStuff.com";

    $tag2 = new Tag;
    $tag2->name = "ItSolutionStuff.com 2";

    $post->tags()->saveMany([$tag1, $tag2]);
});

Route::get('create-multi-video-tag', function () {
    $video = Video::find(1);

    $tag1 = new Tag;
    $tag1->name = "ItSolutionStuff.com";

    $tag2 = new Tag;
    $tag2->name = "ItSolutionStuff.com 2";

    $video->tags()->saveMany([$tag1, $tag2]);
});

Route::get('post-tag-attach', function () {
    $post = Post::find(1);

    $tag1 = Tag::find(3);
    $tag2 = Tag::find(4);

    $post->tags()->attach([$tag1->id, $tag2->id]);
});

Route::get('video-tag-attach', function () {
    $video = Video::find(1);

    $tag1 = Tag::find(3);
    $tag2 = Tag::find(4);

    $video->tags()->attach([$tag1->id, $tag2->id]);
});

Route::get('post-tag-sync', function () {
    $post = Post::find(1);

    $tag1 = Tag::find(3);
    $tag2 = Tag::find(4);

    $post->tags()->sync([$tag1->id, $tag2->id]);
});

Route::get('video-tag-sync', function () {
    $video = Video::find(1);

    $tag1 = Tag::find(3);
    $tag2 = Tag::find(4);

    $video->tags()->sync([$tag1->id, $tag2->id]);
});

// Retrieve Records
Route::get('post-to-tag', function () {
    $post = Post::find(1);

    dd($post->tags);
});

Route::get('video-to-tag', function () {
    $video = Video::find(1);

    dd($video->tags);
});

Route::get('tag-to-post', function () {
    $tag = Tag::find(1);

    dd($tag->posts);
});

Route::get('tag-to-video', function () {
    $tag = Tag::find(1);

    dd($tag->videos);
});
