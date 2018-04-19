<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;

class PanelController extends Controller
{
    public function index()
    {
    	$panels = Panel::latest()->get();
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
            'projectName' => 'required|max:150',
            'projectLink' => 'required|url',
            'status' => 'required',
            'owner' => 'required'
        ]);
		Panel::create(request()->all());
		return redirect('/');
    }
}