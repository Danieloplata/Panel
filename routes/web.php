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

// Homepage view
Route::get('/', function () {
    return view('home');
});

// Main panel views
Route::get('/panel', 'PanelController@index')->name('panelOverview');
Route::get('/panel/create', 'PanelController@create')->name('createPanel');
Route::post('/panel', 'PanelController@store')->name('storePanel');
Route::get('/panel/{panel}', 'PanelController@show')->name('showPanel');

// Main project views
Route::get('/projects', 'ProjectController@index')->name('projectsOverview');
Route::get('/projects/{project}', 'ProjectController@show')->name('showProject');

// Project interaction
Route::get('/projects/create', 'ProjectController@create')->name('createProject');
Route::post('/projects', 'ProjectController@store')->name('storeProject');

// Help section routing
Route::get('/help', function () {
		return view('help/index');
});

Route::get('/help/{topic}', function ($topic) {
	return view('help/show');
});