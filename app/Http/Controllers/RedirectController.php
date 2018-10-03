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
    	$this->middleware('countryCheck');
        //$this->middleware('auth', ['except' => ['start', 'passback', 'thankyou']]);
    }

    public function start($panelID, $respondentID) {

    	$panelID = sanitise($panelID);
		$respondentID = sanitise($respondentID);
		$countryCode = session('countryCode');
		
        Respondent::create([
			'panel_id' => $panelID,
			'respondentID' => $respondentID,
			'ipAddress' => sanitise($_SERVER['REMOTE_ADDR']),
			'userAgent' => sanitise($_SERVER['HTTP_USER_AGENT']),
			'countryCode' => $countryCode,
			'status' => "Incomplete",
    	]);
		
        $panel = Panel::findOrFail($panelID);
      
        return redirect($panel->redirectLink . $respondentID);
	}

    public function passback($panelID, $status, $respondentID)
    {
        $panelID = sanitise($panelID);
		$status = sanitise($status);
		$respondentID = sanitise($respondentID);
		
        Respondent::where('panel_id', $panelID)
        ->where('respondentID', $respondentID)
        ->first()
        ->update(['status' => $status]);
		 
		 return redirect()->route('thankYou');
    }

    public function thankyou()
    {
    	return view('panel.thankyou');
    }

}
