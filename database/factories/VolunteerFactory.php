<?php

use Faker\Generator as Faker;

$factory->define(App\Volunteer::class, function (Faker $faker) {
    return [
        'id' => function () {
            return factory('App\User')->create(['role' => 2])->id;
        },
    ];
});
