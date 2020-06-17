<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerPurchase extends Model
{
    const METHOD_CREDIT_CARD = 'credit_card';
    const METHOD_PAYPAL = 'paypal';

    protected $fillable = ['method', 'amount'];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
