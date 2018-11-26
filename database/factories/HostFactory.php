<?php

use Faker\Generator as Faker;

$factory->define(App\Host::class, function (Faker $faker) {
    return [
        'id' => function () {
            factory('App\User')->create(['role' => 1])->id;
        }
    ];
});
