<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
	// Set fillable form fields
	protected $fillable = [
		'projectName',
		'projectLink'
	];

	// Display panels with a status of LIVE
 	public static function activePanels()
	{
		return static::where('status', 'LIVE')->get();
	}

}