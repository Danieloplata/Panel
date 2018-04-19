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

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}