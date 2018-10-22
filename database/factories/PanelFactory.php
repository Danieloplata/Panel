<?php

use Faker\Generator as Faker;

$factory->define(Panel::class, function (Faker $faker) {
    return [
        'project_id' => function () {
    		return factory('App\Project')->create()->id;
    	},
        'user_id' => function () {
    		return factory('App\User')->create()->id;
    	},
        'projectName' => $faker->sentence,
        'redirectLink' => $faker->domainName . '/survey.php?=',
        'projectProvider' => rand(1,2),
        'status' => 'LIVE',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
