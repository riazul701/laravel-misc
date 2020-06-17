<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $fillable = ['address', 'city', 'state', 'zip'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
