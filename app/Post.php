<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'published_at'
    ];

    /**
     * Get the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    /**
     * Set the post title.
     *
     * @param  string  $value
     * @return string
     */
    public function setNameAttribute($value) {
        $this->attributes['name'] = strtolower($value);
    }
}
