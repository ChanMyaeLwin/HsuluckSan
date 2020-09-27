<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tickets;
use Faker\Generator as Faker;

$factory->define(Tickets::class, function (Faker $faker) {
    return [
        'name' => chr(rand(97,122)).'/'.$faker->numberBetween($min = 100000, $max = 999999),
        'times_id' => 1,
        'owner' => 1,
        'status' => 1
    ];
});
