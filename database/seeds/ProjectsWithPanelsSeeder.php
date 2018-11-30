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
			$panels = factory('App\Panel', 3)->create(['project_id' => $project->id, 'user_id' => $project->user_id]);

			$panels->each(function($panel) {

                $provider = factory('App\Provider')->create(['panel_id' => $panel->id]);

				factory('App\Respondent', 200)->create([
                    'panel_id' => $panel->id,
                ]);

				factory('App\CountryPanel', 3)->create([
                    'panel_id' => $panel->id
                ]);
			});
            
		});
    }
}
