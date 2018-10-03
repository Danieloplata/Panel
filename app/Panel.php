<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model
{
	// Set fillable form fields
	protected $fillable = [
        'project_id',
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

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function respondents()
    {
        return $this->hasMany(Respondent::class);
    }

}