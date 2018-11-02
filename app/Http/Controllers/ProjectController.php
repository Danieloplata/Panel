<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$projects = Project::latest()
           ->paginate(10);

		return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
		return view('projects.show', compact('project'));
    }

    public function create()
    {
		return view('projects.create');
    }

    public function store(Request $request)
    {
		$data = $request->validate([
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

        $project = auth()->user()->projects()->create($data);

        return redirect()
            ->route('showProject', $project->id)
            ->with('message', 'Project created');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
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
            'codeframeRequired' => 'present',
            'rawDataFormat' => 'required',
            'crossTabsRequired' => 'present',
            'tabFormat' => 'required',
            'verbFormat' => 'required',
            'notes' => 'required'
        ]);

        $project->update($data);

        return redirect()
            ->route('showProject', $project->id)
            ->with('message', 'Project updated');
    }

    public function destroy(Project $project) 
    {
        $project->delete();

        return redirect()
            ->route('projectsOverview')
            ->with('message', 'Project deleted');
    }

}