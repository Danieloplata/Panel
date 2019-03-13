<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PanelActivityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp() 
    {
        parent::setup();
        $this->be($user = factory('App\User')->create());
        $this->project = factory('App\Project')->create();
        $this->panel = factory('App\Panel')->create(['project_id' => $this->project->id]);
        $this->provider = factory('App\Provider')->create(['panel_id' => $this->panel->id]);
    }

    /** @test */
    function creating_a_panel_generates_activity()
    {
        $this->withoutExceptionHandling();
        
        $this->assertCount(2, $this->panel->project->activity);
        $this->assertEquals('panel_created', $this->panel->project->activity->last()->description);
    }

    /** @test */
    function updating_a_panel_generates_activity()
    {
        $this->panel->update(['panelName' => 'changed']);

        $this->assertCount(3, $this->project->activity);
        $this->assertEquals('panel_updated', $this->project->activity->last()->description);
    }

}
