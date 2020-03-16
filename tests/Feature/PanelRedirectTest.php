<?php

namespace Tests\Feature;

use App\Country;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PanelRedirectTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setup();
        $this->be($user = factory('App\User')->create());
        $this->project = factory('App\Project')->create();
        $this->panel = factory('App\Panel')->create(['project_id' => $this->project->id]);

        $this->countryPanel = factory('App\CountryPanel')->create([
            'panel_id' => $this->panel->id,
            'country_id' => 231
        ]);
    }

    /** @test */
    public function a_respondent_from_a_whitelisted_country_can_access_the_start_route()
    {
        $this->withoutExceptionHandling();

        Country::create([
            'id' => 231,
            'countryCode' => 'GB',
            'countryName' => 'United Kingdom'
        ]);

        $respondentID ='testRespondent';

        $this->get(route('redirectStart', [
            'panelid' => $this->panel->id,
            'respondentid' => $respondentID
        ]))->assertRedirect($this->panel->redirectLink . $respondentID);
    }

}
