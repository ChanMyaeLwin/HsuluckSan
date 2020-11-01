<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tickets;
use Faker\Generator as Faker;

$factory->define(Tickets::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['က', 'ခ','ဂ','ဃ','င','စ','ဆ','ဇ','ဈ','ည',
        'ဋ','ဌ','ဍ','ဎ','ဏ','တ','ထ','ဒ','ဓ','န','ပ','ဖ','ဗ','ဘ','မ','ယ','ရ','လ','ဝ','သ',
        'ဟ','ဠ','အ']).'/'.$faker->numberBetween($min = 000001, $max = 999999),
        'times_id' => 1,
        'owner' => 1,
        'status' => 1
    ];
});
