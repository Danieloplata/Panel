<?php

use Faker\Generator as Faker;

$factory->define(App\Provider::class, function (Faker $faker) {
    return [
    	'panel_id' => function () {
    		return factory('App\Panel')->create()->id;
    	},
        'providerName' => $faker->text($maxNbChars = 20),
		'completeLink' => $faker->url,
		'quotaFullLink' => $faker->url,
		'screenoutLink' => $faker->url,
    ];
});
