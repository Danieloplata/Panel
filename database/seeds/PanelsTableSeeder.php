<?php

use Illuminate\Database\Seeder;

class PanelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('panels')->insert([
            'projectName' => 'Test Project '.str_random(5),
            'projectLink' => 'http://survey.com/?surveyID=1&id=',
        ]);
    }
}
