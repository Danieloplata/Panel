<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CountryPanel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CountryPanel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CountryPanel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CountryPanel query()
 * @mixin \Eloquent
 */
class CountryPanel extends Model
{
	protected $table = 'country_panel';

    protected $fillable = [
        'panel_id',
		'country_id'
	];
}
