<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'user_id' => function () {
    		return factory('App\User')->create()->id;
    	},
		'projectName' => $faker->text($maxNbChars = 50),
		'amountQuoted' => '£' . $faker->numberBetween($min = 1000, $max = 50000),
		'companyEmail' => $faker->safeEmail,
		'clientEmail' => $faker->safeEmail,
		'methodology' => $faker->randomElement($array = array ('Online Survey','Online CAPI','Offline CAPI','Pen and Paper','Other')),
		'totalInterviews' => $faker->numberBetween($min = 300, $max = 2000),
		'questionnaireBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'scriptedBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'fieldStart' => Carbon::now()->format('Y-m-d H:i:s'),
		'fieldEnd' => Carbon::now()->format('Y-m-d H:i:s'),
		'dataSpecBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'finalDataBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'openQuestions' => $faker->numberBetween($min = 1, $max = 5),
		'codeframeRequired' => $faker->randomElement($array = array ('on','')),
		'rawDataFormat' => $faker->randomElement($array = array ('Excel','SPSS','ASCI','Other')),
		'crossTabsRequired' => $faker->randomElement($array = array ('on','')),
		'tabFormat' => $faker->randomElement($array = array ('Excel','Word','PDF','Other')),
		'verbFormat' => $faker->randomElement($array = array ('Excel','Word','PDF','Other')),
		'notes' => $faker->paragraph,
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
