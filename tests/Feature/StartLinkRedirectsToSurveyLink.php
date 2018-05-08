<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StartLinkRedirectsToSurveyLink extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStartLinkRedirectsToSurveyLink()
    {
        $response = $this->get('/start/12345/respondent/999');
        $response->assertRedirect('https://google.co.uk');
    }
}
