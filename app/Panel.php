<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
	// Set fillable form fields
	protected $fillable = [
		'panelName',
		'redirectLink'
	];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }

}