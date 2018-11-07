<?php

use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'panel_id' => function () {
    		return factory('App\Panel')->create()->id;
    	},
    	'countryCode' => $faker->domainName . '/survey.php?=',
        'status' => 'LIVE'
    ];
});
