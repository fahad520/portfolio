<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Social;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Social::class, function (Faker $faker) {
    return [
        'tag' => Str::random(5),
        'link' => $faker->url
    ];
});
