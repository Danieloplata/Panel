<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PanelGuestTest extends TestCase
{
    use RefreshDatabase;

	public function setUp(): void
    {
        parent::setup();
        $this->project = factory('App\Project')->create();
        $this->panel = factory('App\Panel')->create(['project_id' => $this->project->id]);
    }

   /** @test */
	public function a_guest_may_not_view_all_panels()
    {
	    $response = $this->get('/panel')
            ->assertRedirect('login');
	}

	/** @test */
    public function a_guest_may_not_view_individual_panels()
    {
        $response = $this->get('/panel/' . $this->panel->id)
        	->assertRedirect('login');
    }

    /** @test */
    public function a_guest_may_not_view_the_create_panel_form()
    {
        $response = $this->get(route('createPanel', $this->project->id))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_create_panels()
    {
        $this->get(route('storePanel'), $this->panel->toArray())
            ->assertRedirect('login');
    }

    /** @test */
    public function a_guest_may_not_view_the_edit_panel_form()
    {
        $response = $this->get(route('editPanel', $this->panel->id))
            ->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_edit_a_panel()
    {
    	$response = $this->call('PATCH', route('updatePanel', $this->panel->id), $this->panel->toArray());
    	$response->assertRedirect(route('login'));
    }

    /** @test */
    public function a_guest_may_not_delete_a_panel()
    {
        $response = $this->delete($this->panel->path());
        $response->assertRedirect(route('login'));
    }
}
