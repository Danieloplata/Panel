<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panel;
use App\Respondent;
use App\Exports\RespondentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class RespondentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }

    public function index($panel)
    {
    	$panel = Panel::find($panel);

    	$respondents = Respondent::where('panel_id', $panel->id)
    	   ->latest()
    	   ->paginate(10);
  	
		return view('respondents.index', compact('panel','respondents'));
    }

    public function filter($panel, $status)
    {
        $panel = Panel::find($panel);

        $respondents = Respondent::where('panel_id', $panel->id)
            ->where('status', $status)
            ->latest()
            ->paginate(10);
    
        return view('respondents.index', compact('panel','respondents', 'status'));
    }

    public function export(Panel $panel) 
    {
        $filename = str_slug($panel->panelName) . '_respondents.xlsx';
        return (new RespondentsExport)->forPanel($panel)->download($filename);
    }

}
