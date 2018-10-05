<?php

// Homepage view
Route::get('/', 'HomeController@index')->name('home');

// Panel views
Route::prefix('panel')->middleware('auth')->group(function () {
	Route::get('/', 'PanelController@index')->name('panelOverview');
	Route::post('/', 'PanelController@store')->name('storePanel');
	Route::get('/create/{projectID}', 'PanelController@create')->name('createPanel');
	Route::get('/{panel}', 'PanelController@show')->name('showPanel');
	Route::get('/{panel}/delete', 'PanelController@delete')->name('deletePanel');
	Route::get('/{panelID}/respondents', 'RespondentController@index')->name('showRespondents');
	Route::get('/{panelID}/respondents/{status}', 'RespondentController@filter')->name('showFilteredRespondents');
});

// Panel Redirect
Route::get('/start/{panelid}/{respondentid}', 'RedirectController@start')->name('redirectStart');
Route::get('/passback/{panelid}/{status}/{respondentid}', 'RedirectController@passback')->name('redirectPassback');

// Provider views
Route::get('/providers', 'ProviderController@index')->name('providerOverview');
Route::get('/providers/{provider}', 'ProviderController@show')->name('showProvider');

// Project views
Route::prefix('projects')->middleware('auth')->group(function () {
    Route::get('/', 'ProjectController@index')->name('projectsOverview');
    Route::post('/', 'ProjectController@store')->name('storeProject');
    Route::get('/create', 'ProjectController@create')->name('createProject');
    Route::get('/{project}', 'ProjectController@show')->name('showProject');
});

// Help section routing
Route::get('/docs', 'DocumentationController@index')->name('DocumentationOverview');
Route::get('/docs/{topic}', 'DocumentationController@show')->name('showDocumentationTopic');

// Status pages
Route::get('/thankyou', 'RedirectController@thankyou')->name('thankYou');

// Authentication routes
Auth::routes();