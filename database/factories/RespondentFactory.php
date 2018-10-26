<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Respondent::class, function (Faker $faker) {
    return [
        'panel_id' => function () {
    		return factory('App\Panel')->create()->id;
    	},
    	'providerID' => $faker->swiftBicNumber,
        'ipAddress' => $faker->ipv4,
        'userAgent' => $faker->userAgent,
        'countryCode' => $faker->numberBetween($min = 1, $max = 245),
        'status' => $faker->randomElement($array = array ('Complete','QuotaFull','Incomplete','Screenout')),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
