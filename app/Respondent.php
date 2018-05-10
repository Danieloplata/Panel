<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{

	

    public function panel()
    {
        return $this->belongsToMany(Panel::class);
    }
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
