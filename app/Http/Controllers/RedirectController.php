<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Respondent;
use App\Panel;
use Cookie;

class RedirectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['start', 'passback']]);
    }

    public function start($panelID, $respondentID) {

    	$panel = Panel::findOrFail($panelID);

	    $respondent = new Respondent;
	    $respondent->panel_id = $panelID;
	    $respondent->respondentID = $respondentID;
	    $respondent->status = "incomplete";
	    $respondent->ipAddress = $_SERVER['REMOTE_ADDR'];
	    $respondent->userAgent = $_SERVER['HTTP_USER_AGENT'];
	    $respondent->save();

	    $cookie = Cookie::forever('PanelRespondent', $respondentID);
    
	    return redirect($panel->projectLink . $respondentID);    

	}

    public function passback($panelID, $status, $respondentID)
    {
        dd($cookie);
    }
}
