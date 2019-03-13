<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectActivityTest extends TestCase
{
    use RefreshDatabase;

    public function setUp() 
    {
        parent::setup();
        $this->be($user = factory('App\User')->create());
        $this->project = factory('App\Project')->create();
    }

    /** @test */
    function creating_a_project_generates_activity()
    {
        $this->assertCount(1, $this->project->activity);
        $this->assertEquals('project_created', $this->project->activity[0]->description);
    }

    /** @test */
    function updating_a_project_generates_activity()
    {
        $this->project->update(['projectName' => 'changed']);

        $this->assertCount(2, $this->project->activity);
        $this->assertEquals('project_updated', $this->project->activity->last()->description);
    }
}
