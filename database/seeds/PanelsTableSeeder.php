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
            'project_id' => rand(1,2),
            'user_id' => rand(1,2),
            'projectName' => 'Test Project '.str_random(5),
            'projectLink' => 'http://survey.com/?surveyID=1&id=',
            'projectProvider' => rand(1,2),
            'status' => 'LIVE',
        ]);
    }
}
