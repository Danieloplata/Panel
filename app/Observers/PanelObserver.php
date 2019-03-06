<?php

namespace App\Observers;

use App\Panel;
use App\Activity;

class PanelObserver
{
    /**
     * Handle the panel "created" event.
     *
     * @param  \App\Panel  $panel
     * @return void
     */
    public function created(Panel $panel)
    {
        Activity::create([
            'project_id' => $panel->project->id,
            'description' => 'panel_created'
        ]);
    }

    /**
     * Handle the panel "updated" event.
     *
     * @param  \App\Panel  $panel
     * @return void
     */
    public function updated(Panel $panel)
    {
        Activity::create([
            'project_id' => $panel->project->id,
            'description' => 'panel_updated'
        ]);
    }

    /**
     * Handle the panel "deleted" event.
     *
     * @param  \App\Panel  $panel
     * @return void
     */
    public function deleted(Panel $panel)
    {
        Activity::create([
            'project_id' => $panel->project->id,
            'description' => 'panel_updated'
        ]);
    }

}
