<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'user_id' => 1,
		'projectName' => $faker->sentence,
		'amountQuoted' => '£' . $faker->numberBetween($min = 1000, $max = 50000),
		'companyEmail' => $faker->safeEmail,
		'clientEmail' => $faker->safeEmail,
		'methodology' => 'Online Survey',
		'totalInterviews' => $faker->numberBetween($min = 300, $max = 2000),
		'questionnaireBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'scriptedBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'fieldStart' => Carbon::now()->format('Y-m-d H:i:s'),
		'fieldEnd' => Carbon::now()->format('Y-m-d H:i:s'),
		'dataSpecBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'finalDataBy' => Carbon::now()->format('Y-m-d H:i:s'),
		'openQuestions' => $faker->numberBetween($min = 1, $max = 5),
		'codeframeRequired' => '',
		'rawDataFormat' => 'SPSS',
		'crossTabsRequired' => 'on',
		'tabFormat' => 'Excel',
		'verbFormat' => 'Excel',
		'notes' => $faker->paragraph,
		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
