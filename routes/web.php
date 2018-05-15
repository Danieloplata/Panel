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
Route::get('/', 'HomeController@index')->name('home');;

// Panel views
Route::get('/panel', 'PanelController@index')->name('panelOverview');
Route::get('/panel/create/{projectID}', 'PanelController@create')->name('createPanel');
Route::post('/panel', 'PanelController@store')->name('storePanel');
Route::get('/panel/{panel}', 'PanelController@show')->name('showPanel');

// Panel Redirect
Route::get('/start/{panelid}/{respondentid}', 'RedirectController@start')->name('redirectStart');
Route::get('/passback/{panelid}/{status}/{respondentid}', 'RedirectController@passback')->name('redirectPassback');

// Project views
Route::get('/projects', 'ProjectController@index')->name('projectsOverview');
Route::get('/projects/create', 'ProjectController@create')->name('createProject');
Route::post('/projects', 'ProjectController@store')->name('storeProject');
Route::get('/projects/{project}', 'ProjectController@show')->name('showProject');

// Help section routing
Route::get('/docs', 'DocumentationController@index')->name('DocumentationOverview');
Route::get('/docs/{topic}', 'DocumentationController@show')->name('showDocumentationTopic');

// Authentication routes
Auth::routes();
