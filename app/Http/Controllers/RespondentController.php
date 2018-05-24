<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panel;
use App\Respondent;

class RespondentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }

    public function index($panelID)
    {
    	$panel = Panel::find($panelID);

    	$respondents = Respondent::where('panel_id', $panelID)
    	->latest()
    	->paginate(10);
  	
		return view('respondents/index', compact('panel','respondents'));
    }

    public function filter($panelID, $status)
    {
        $panel = Panel::find($panelID);

        $respondents = Respondent::where('panel_id', $panelID)
        ->where('status', $status)
        ->latest()
        ->paginate(10);
    
        return view('respondents/index', compact('panel','respondents'));
    }

}
