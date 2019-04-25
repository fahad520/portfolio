<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Email;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'tag' => Str::random(4),
    ];
});
