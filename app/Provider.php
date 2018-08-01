<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
	protected $fillable = [
		'providerName',
		'completeLink',
		'quotaFullLink',
		'screenoutLink'
	];

    public function panels()
    {
        return $this->belongsTo(Panel::class);
    }
}
