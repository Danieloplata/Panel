<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
	// Set fillable form fields
	protected $fillable = [
		'surveyID',
		'projectName',
		'projectLink',
		'status',
		'owner'
	];

	// Display panels with a status of LIVE
 	public static function activePanels()
	{
		return static::where('status', 'LIVE')->get();
	}
}
