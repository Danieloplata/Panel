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
	  	return view('panel.index', compact('panels'));
    }

    public function show(Panel $panel)
    {
        $totalResponses = $panel->respondents->count();
        $completeResponses = $panel->respondents->where('status', 'Complete')->count();
        $incompleteResponses = $panel->respondents->where('status', 'Incomplete')->count();
        $quotaFullResponses = $panel->respondents->where('status', 'QuotaFull')->count();
        $screenoutResponses = $panel->respondents->where('status', 'Screenout')->count();

        if($totalResponses == 0 OR $screenoutResponses == 0) {
            $screenoutRate = 0;
        } else {
            $screenoutRate = number_format(($screenoutResponses / $totalResponses) * 100, 2);
        }

        if($totalResponses == 0 OR $completeResponses == 0) {
            $incidenceRate = 0;
        } else {
            $incidenceRate = number_format(($completeResponses / $totalResponses) * 100, 2);
        }

        $responseStatistics = (object) [
            'totalResponses' => $totalResponses,
            'completeResponses' => $completeResponses,
            'incompleteResponses' => $incompleteResponses,
            'quotaFullResponses' => $quotaFullResponses,
            'screenoutResponses' => $screenoutResponses,
            'screenoutRate' => $screenoutRate,
            'incidenceRate' => $incidenceRate
        ];

		return view('panel.show', compact('panel', 'responseStatistics'));
    }

    public function create($projectID)
    {
		return view('panel.create', compact('projectID'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'project_id' => 'required',
            'panelName' => 'required|max:150',
            'redirectLink' => 'required|url'
        ]);

		$panel = Panel::create($data);

		return redirect()
            ->route('showPanel', $panel->id)
            ->with('message', 'Panel created');
    }
}