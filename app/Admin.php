<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ActiveScope;

class Admin extends Model
{
    protected $fillable = [
        'name','email','password','is_active',
    ];

    protected static function boot()
    {
        parent::boot();

        return static::addGlobalScope(new ActiveScope);
    }
}
