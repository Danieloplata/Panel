<?php

use Illuminate\Database\Seeder;

class ProjectsWithPanelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$projects = factory('App\Project', 20)->create();

		$projects->each(function($project) {
			factory('App\Panel', 3)->create(['project_id' => $project->id, 'user_id' => $project->user_id]);
		});
    }
}
