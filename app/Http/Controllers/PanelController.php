<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Panel;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['start']]);
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

    public function start()
    {
        return redirect('https://google.co.uk');
    }

    public function passback()
    {
        return redirect('https://google.co.uk');
    }
}