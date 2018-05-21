<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
	protected $primaryKey = 'id';
    protected $fillable = [
        'panel_id',
        'respondentID',
        'status',
        'ipAddress',
        'userAgent',
        'countryCode'
    ];

    public function panel()
    {
        return $this->belongsTo(Panel::class);
    }
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
