<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provider;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$providers = Provider::latest()->get();
		return view('providers/index', compact('providers'));
    }

    public function show(Provider $provider)
    {
		return view('providers/show', compact('provider'));
    }

    public function create()
    {
		return view('providers/create');
    }

    public function store()
    {
		$this->validate(request(), [
            'providerName' => 'required',
            'completeLink' => 'required|url',
            'quotaFullLink' => 'required|url',
            'screenoutLink' => 'required|url',
        ]);

        Provider::create(request()->all());

        session()->flash('message', 'Provider created');

        return redirect(route('showProvider', $provider->id));
    }
}
