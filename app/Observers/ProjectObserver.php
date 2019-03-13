<?php

namespace App\Observers;

use App\Project;
use App\Activity;

class ProjectObserver
{
    /**
     * Handle the project "created" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function created(Project $project)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => 'project_created'
        ]);
    }

    /**
     * Handle the project "updated" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function updated(Project $project)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => 'project_updated'
        ]);
    }

    /**
     * Handle the project "deleted" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function deleted(Project $project)
    {
       Activity::create([
            'project_id' => $project->id,
            'description' => 'deleted'
        ]);
    }

    /**
     * Handle the project "restored" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function restored(Project $project)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => 'restored'
        ]);
    }

    /**
     * Handle the project "force deleted" event.
     *
     * @param  \App\Project  $project
     * @return void
     */
    public function forceDeleted(Project $project)
    {
        Activity::create([
            'project_id' => $project->id,
            'description' => 'force deleted'
        ]);
    }
}
