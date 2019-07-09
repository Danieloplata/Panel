<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectAuthedTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setup();
        $this->be($user = factory('App\User')->create());
        $this->project = factory('App\Project')->create();
    }

	/** @test */
	public function an_authenticated_user_can_view_all_projects()
    {
	    $response = $this->get('/projects')
            ->assertSee($this->project->projectName);
	}

    /** @test */
    public function an_authenticated_user_can_view_individual_projects()
    {
        $response = $this->get('/projects/' . $this->project->id)
            ->assertSee($this->project->projectName);
    }

    /** @test */
    public function an_authenticated_user_can_create_projects()
    {
        $project = factory('App\Project')->create();

        $this->get($project->path())
            ->assertSee($project->projectName);
    }

    /** @test */
    public function an_authenticated_user_can_view_the_create_project_form()
    {
        $this->get(route('createProject'))
            ->assertSee('Create a new project');
    }

    /** @test */
    public function an_authenticated_user_can_view_the_edit_project_form()
    {
        $response = $this->get(route('editProject', $this->project->id))
            ->assertSee($this->project->projectName);
    }

    /** @test */
    public function an_authenticated_user_can_edit_a_project()
    {
        $response = $this->call('POST', route('updateProject', $this->project->id), $this->project->toArray())
            ->assertSee('Project updated');
    }

    /** @test */
    public function an_authenticated_user_can_delete_a_project()
    {
        $response = $this->delete($this->project->path());
        $response->assertStatus(302);
        $response->assertRedirect(route('projectsOverview'));
    }

}