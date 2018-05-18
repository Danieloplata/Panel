<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondentController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth', ['except' => ['store']]);
    }

    public function show()
    {
    	$respondents = Respondent::latest()->get();
		return view('panel/respondents', compact('respondents'));
    }

}
