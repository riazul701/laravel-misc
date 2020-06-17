<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use App\Customer;
use App\CustomerAddress;
use App\CustomerPurchase;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber
    ];
});

$factory->define(CustomerAddress::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode
    ];
});

$factory->define(CustomerPurchase::class, function (Faker $faker) {
    return [
        'method' => $faker->randomElement([
            CustomerPurchase::METHOD_CREDIT_CARD,
            CustomerPurchase::METHOD_PAYPAL
        ]),
        'amount' => $faker->randomFloat(2, 10, 200)
    ];
});
