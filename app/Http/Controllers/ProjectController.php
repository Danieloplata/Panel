<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();
		return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {
		return view('project/show', compact('project'));
    }

    public function create()
    {
		return view('project/create');
    }

    public function store()
    {
		Project::create(request([
			'Example',
			]));

		return redirect('/');
    }
}