<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
 	public function isComplete()
	{
		return false;
	}
}
