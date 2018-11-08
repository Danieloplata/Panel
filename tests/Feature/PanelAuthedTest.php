<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Panel;

class PanelAuthedTest extends TestCase
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
	public function an_authenticated_user_can_view_all_panels()
    {
	    $response = $this->get('/panel')
            ->assertSee($this->panel->panelName);
	}

	/** @test */
    public function an_authenticated_user_can_view_individual_panels()
    {
        $response = $this->get('/panel/' . $this->panel->id)
        	->assertSee($this->panel->panelName);
    }

    /** @test */
    public function an_authenticated_user_can_view_the_create_panel_form()
    {
        $response = $this->get(route('createPanel', $this->project->id))
            ->assertSee('Create a new panel');
    }

    /** @test */
    public function an_authenticated_user_can_create_panels()
    {
        $this->get($this->project->path())
            ->assertSee($this->panel->panelName);
    }

    /** @test */
    public function an_authenticated_user_can_create_panel_providers()
    {
        $this->get($this->panel->path())
            ->assertSee($this->panel->provider->providerName);
    }

    /** @test */
    public function an_authenticated_user_can_view_the_edit_panel_form()
    {
        $response = $this->get(route('editPanel', $this->panel->id))
            ->assertSee($this->panel->panelName);
    }

    /** @test */
    public function an_authenticated_user_can_edit_a_panel()
    {
    	$response = $this->call('POST', route('updatePanel', $this->panel->id), $this->panel->toArray());
    	$response->assertSee('Panel updated');
    }

    /** @test */
    public function an_authenticated_user_can_delete_a_panel()
    {
        $response = $this->delete($this->panel->path());
        $response->assertStatus(302);
        $response->assertRedirect(route('showProject', $this->project->id));
        // ->assertDatabaseMissing('panels', ['panel_id' => $this->panel->id]);
    }

}