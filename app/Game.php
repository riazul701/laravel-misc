<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function scopeNintendo($query) {
        return $query->where('publisher', '=', 'Nintendo');
    }
}
