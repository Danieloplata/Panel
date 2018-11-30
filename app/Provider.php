<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Provider
 *
 * @property-read \App\Panel $panel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Respondent[] $respondents
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider query()
 * @mixin \Eloquent
 */
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
