<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;
use App\Internet;

$factory->define(Internet::class, function (Faker $faker) {
    return [
        'safeEmail' => $faker->safeEmail,
        'domainName' => $faker->domainName,
        'url' => $faker->url,
        'ipv6' => $faker->ipv6
    ];
});
