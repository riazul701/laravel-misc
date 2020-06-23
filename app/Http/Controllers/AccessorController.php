<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AccessorController extends Controller
{
    public function index() {
        // load post
        $post = Post::find(1);

        // check the name property
        echo $post->name . '<br />';

        // check the date property
        echo $post->published_at . '<br />';

        // as we've mutated the published_at column as Carbon date, we can use following as well
        echo $post->published_at->getTimestamp();
        exit;
    }
}
