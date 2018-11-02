<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectGuestTest extends TestCase
{
	use RefreshDatabase;

	public function setUp() 
	{
        parent::setup();
        $this->project = factory('App\Project')->create();
    }
    
    /** @test */
    public function a_guest_may_not_view_all_projects()
    {
        $response = $this->get('/projects')
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_view_individual_projects()
    {
        $response = $this->get('/projects/' . $this->project->id)
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_create_projects()
    {
        $project = factory('App\Project')->create();

        $this->get(route('storeProject'), $project->toArray())
            ->assertRedirect('login');
    }

    /** @test */
    public function a_guest_may_not_view_the_create_project_form()
    {
        $response = $this->get(route('createProject'))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_view_the_edit_project_form()
    {
        $response = $this->get(route('editProject', $this->project->id))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_edit_a_project()
    {
        $response = $this->get(route('updateProject', $this->project->id))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_delete_a_panel()
    {
        $response = $this->get(route('deleteProject', $this->project->id))
            ->assertRedirect(route('login'));
    }

}
