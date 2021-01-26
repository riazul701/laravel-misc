<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the post
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
