<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
 	public static function activePanels()
	{
		return static::where('status', 'LIVE')->get();
	}
}
