<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('home');

});


Route::get('/panel', function () {

	$panels = DB::table('panels')->latest()->get();

	return view('panel/index', compact('panels'));

});


Route::get('/panel/{id}', function ($id) {

	
	$panel = DB::table('panels')->find($id);

	return view('panel/show', compact('panelID'));

});