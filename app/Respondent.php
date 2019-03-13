<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Respondent
 *
 * @property-read \App\Panel $panel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Project[] $project
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Respondent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Respondent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Respondent query()
 * @mixin \Eloquent
 */
class Respondent extends Model
{
	protected $primaryKey = 'id';

    protected $fillable = [
        'panel_id',
        'country_id',
        'respondentID',
        'ipAddress',
        'userAgent',
        'status',
    ];

    public function panel()
    {
        return $this->belongsTo(Panel::class);
    }
    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
