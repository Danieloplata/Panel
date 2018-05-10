<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondentController extends Controller
{
    public function store()
    {
    	Respondent::create([
    		'panel_id' => $panelID,
    		'providerID' => $respondentID,
    		'ipAddress' => "192.168.0.1",
    		'status' => "Incomplete",
    	]);
    }
}
