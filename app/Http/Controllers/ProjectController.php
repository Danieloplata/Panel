<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::latest()->get();
		return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {
		return view('projects/show', compact('project'));
    }

    public function create()
    {
		return view('projects/create');
    }

    public function store()
    {
		$this->validate(request(), [
            'projectName' => 'required',
            'amountQuoted' => 'required',
            'companyEmail' => 'required|email',
            'clientEmail' => 'required|email',
            'methodology' => 'required',
            'totalInterviews' => 'required|numeric',
            'questionnaireBy' => 'required|date',
            'scriptedBy' => 'required|date',
            'fieldStart' => 'required|date',
            'fieldEnd' => 'required|date',
            'dataSpecBy' => 'required|date',
            'finalDataBy' => 'required|date',
            'openQuestions' => 'required|numeric',
            'codeframeRequired' => 'required',
            'rawDataFormat' => 'required',
            'crossTabsRequired' => 'required',
            'tabFormat' => 'required',
            'verbFormat' => 'required',
            'notes' => 'required'
        ]);
        Project::create(request()->all());
        return redirect('/');
    }
}