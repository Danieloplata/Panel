<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;

class PanelController extends Controller
{
    public function index()
    {
    	$panels = Panel::all();
		return view('panel/index', compact('panels'));
    }

    public function show(Panel $panel)
    {
		return view('panel/show', compact('panel'));
    }

    public function create()
    {
		return view('panel/create');
    }

    public function store()
    {
        $this->validate(request(), [
            
        ]);
		Panel::create(request([
			'surveyID',
			'projectName',
			'projectLink',
			'status',
			'owner'
			]));

		return redirect('/');
    }
}