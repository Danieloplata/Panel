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
		return view('projects/show', compact('project'));
    }

    public function create()
    {
		return view('projects/create');
    }

    public function store()
    {
		$this->validate(request(), [
            
        ]);
        Project::create(request([
            'projectName',
            'amountQuoted',
            'companyEmail',
            'clientEmail',
            'methodology',
            'totalInterviews',
            'questionnaireBy',
            'scriptedBy',
            'fieldStart',
            'fieldEnd',
            'dataSpecBy',
            'finalDataBy',
            'openQuestions',
            'codeframeRequired',
            'rawDataFormat',
            'crossTabsRequired',
            'tabFormat',
            'verbFormat',
            'notes'
            ]));

        return redirect('/');
    }
}