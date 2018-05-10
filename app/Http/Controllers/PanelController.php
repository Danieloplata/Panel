<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['start', 'passback']]);
    }
    
    public function index()
    {
    	$panels = Panel::latest()->get();
	  	return view('panel/index', compact('panels'));
    }

    public function show(Panel $panel)
    {
		  return view('panel/show', compact('panel'));
    }

    public function create($projectID)
    {
		return view('panel/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'panelName' => 'required|max:150',
            'projectLink' => 'required|url',
            'status' => 'required',
            'owner' => 'required'
        ]);
		  Panel::create(request()->all());
		  return redirect('/');
    }

    public function start($panelID, $respondentID)
    {
        // Record respondent ID and any additional data in the Respondents table with the linked panelID
        dd($panelID, $respondentID);

        // Get the panel redirect link, add the respondentID and redirect to it
        return redirect('https://google.com/index.php/12345?respondentID='.$respondentID);
    }

    public function passback($panelID, $status, $respondentID)
    {
        dd($panelID, $status, $respondentID);

        // Get the provider redirect and redirect there
        return redirect('https://google.co.uk');
    }
}