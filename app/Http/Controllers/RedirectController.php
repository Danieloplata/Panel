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
    	$this->middleware('CountryCheck');
        //$this->middleware('auth', ['except' => ['start', 'passback', 'thankyou']]);
    }

    public function start($panelID, $respondentID) {

    	$panelID = sanitise($panelID);
		$respondentID = sanitise($respondentID);
		
        $curl = curl_init();

        curl_setopt_array($curl, array(
			CURLOPT_URL => "http://ip-api.com/json/".$_SERVER['REMOTE_ADDR'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_TIMEOUT => 30000,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
			),
		));
		
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		$geoloc = json_decode($response);

        Respondent::create([
			'panel_id' => $panelID,
			'respondentID' => $respondentID,
			'ipAddress' => sanitise($_SERVER['REMOTE_ADDR']),
			'userAgent' => sanitise($_SERVER['HTTP_USER_AGENT']),
			'countryCode' => sanitise($geoloc->countryCode),
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
    	return view('panel/thankyou');
    }

}
