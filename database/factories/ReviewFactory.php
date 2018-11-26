<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create(['role' => 1])->id;
        },
        'rate' => $faker->numberBetween(1, 5),
        'body' => $faker->sentence(),
        'owner_id' => function () {
            return factory('App\User')->create(['role' => 2])->id;
        }
    ];
});
