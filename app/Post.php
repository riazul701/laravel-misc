<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "posts";

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'body', 'status'
    ];

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeToday($query) {
        return $query->whereDate('created_at', \Carbon\Carbon::today());
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus($query, $type) {
        return $query->where('status', $type);
    }
}
