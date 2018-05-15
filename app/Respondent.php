<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
	protected $fillable = [
		'panel_id',
        'status',
        'ipAddress',
        'created_at'
	];	
    public function panel()
    {
        return $this->belongsToMany(Panel::class);
    }
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
