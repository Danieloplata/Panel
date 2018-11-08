<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
	public function error($error)
	{
		switch ($error)
		{
			case "country":
		        return view('staticpages.errors.countrycheck');
		        break;
		    case "duplicate":
		    	return view('staticpages.errors.duplicatecheck');
		        break;
		    default:
		    	return view('staticpages.errors.generic');
		        break;
		}
	}

    public function thankyou()
    {
    	return view('staticpages.thankyou');
    }
}