<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
	protected $fillable = [
		'panel_id',
		'providerName',
		'completeLink',
		'quotaFullLink',
		'screenoutLink'
	];

    public function panel()
    {
        return $this->belongsTo(Panel::class);
    }

    public function respondents()
    {
    	return $this->hasMany(Respondent::class);
    }
}
