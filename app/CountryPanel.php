<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryPanel extends Model
{
	protected $table = 'country_panel';

    protected $fillable = [
        'panel_id',
		'country_id'
	];
}
