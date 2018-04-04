<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

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
}