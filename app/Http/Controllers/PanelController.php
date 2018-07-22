<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
		return view('panel/create', compact('projectID'));
    }

    public function store()
    {
        $this->validate(request(), [
            'panelName' => 'required|max:150',
            'redirectLink' => 'required|url',
        ]);

		Panel::create(request()->all());

        session()->flash('message', 'Panel created');

		return redirect('/');
    }
}