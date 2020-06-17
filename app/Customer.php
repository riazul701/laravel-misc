<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'phone'];

    public function address() {
        return $this->hasOne(CustomerAddress::class);
    }

    public function purchases() {
        return $this->hasMany(CustomerPurchase::class);
    }
}
