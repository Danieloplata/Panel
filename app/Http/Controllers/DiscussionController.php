<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class DiscussionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::latest()
           ->paginate(10);

        return view('discussion.index', compact('projects'));
    }

    public function show()
    {
        return view('dicussion.show');
    }
}
