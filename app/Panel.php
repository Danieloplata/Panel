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
    use RecordsActivity;

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

    public function getResponseStatistics()
    {
        $totalResponses = $this->respondents->count();
        $completeResponses = $this->respondents->where('status', 'complete')->count();
        $incompleteResponses = $this->respondents->where('status', 'incomplete')->count();
        $quotaFullResponses = $this->respondents->where('status', 'quotafull')->count();
        $screenoutResponses = $this->respondents->where('status', 'screenout')->count();

        if($totalResponses == 0 OR $screenoutResponses == 0) {
            $screenoutRate = 0;
        } else {
            $screenoutRate = number_format(($screenoutResponses / $totalResponses) * 100, 2);
        }

        if($totalResponses == 0 OR $completeResponses == 0) {
            $incidenceRate = 0;
        } else {
            $incidenceRate = number_format(($completeResponses / $totalResponses) * 100, 2);
        }

        $responseStatistics = (object) [
            'totalResponses' => $totalResponses,
            'completeResponses' => $completeResponses,
            'incompleteResponses' => $incompleteResponses,
            'quotaFullResponses' => $quotaFullResponses,
            'screenoutResponses' => $screenoutResponses,
            'screenoutRate' => $screenoutRate,
            'incidenceRate' => $incidenceRate
        ];

        return $responseStatistics;
    }

}