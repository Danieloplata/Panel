<?php

use Faker\Generator as Faker;

$factory->define(App\CountryPanel::class, function (Faker $faker) {
    return [
        'panel_id' => function () {
    		return factory('App\Panel')->create()->id;
    	},
        'country_id' => $faker->numberBetween($min = 1, $max = 245)
    ];
});
