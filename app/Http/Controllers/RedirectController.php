<?php

namespace App\Http\Controllers;

use Request;

use App\Respondent;
use App\Panel;
use Cookie;

class RedirectController extends Controller
{
    public function __construct()
    {
    	$this->middleware(['CountryCheck', 'DuplicateCheck']);
        //$this->middleware('auth', ['except' => ['start', 'passback', 'thankyou']]);
    }

    public function start($panelID, $respondentID) {

    	$panelID = sanitise($panelID);
        session(['panelID' => $panelID]);
		$respondentID = sanitise($respondentID);
		//$countryCode = session('countryCode');
        $countryCode = 231;

        $panel = Panel::findOrFail($panelID);

        Respondent::create([
			'panel_id' => $panelID,
            'country_id' => $countryCode,
			'respondentID' => $respondentID,
			'ipAddress' => Request::getClientIp(),
			'userAgent' => Request::userAgent(), //sanitise($_SERVER['HTTP_USER_AGENT']),
			'status' => "incomplete",
    	]);

        return redirect()->away($panel->redirectLink . $respondentID);
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
		 
		 return redirect()->route('thankyou');
    }

}
