<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Panel
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Country[] $countries
 * @property-read \App\Project $project
 * @property-read \App\Provider $provider
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Respondent[] $respondents
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Panel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Panel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Panel query()
 * @mixin \Eloquent
 */
class Panel extends Model
{
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
        return $this->hasOne(Provider::class);
    }

    public function respondents()
    {
        return $this->hasMany(Respondent::class);
    }

    public function path()
    {
        return '/panel/' .  $this->id;
    }

}