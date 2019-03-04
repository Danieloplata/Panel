<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Project
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Panel[] $panels
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project query()
 * @mixin \Eloquent
 */
class Project extends Model
{
    // Set fillable form fields
	protected $fillable = [
        'user_id',
		'projectName',
        'amountQuoted',
        'companyEmail',
        'clientEmail',
        'methodology',
        'totalInterviews',
        'questionnaireBy',
        'scriptedBy',
        'fieldStart',
        'fieldEnd',
        'dataSpecBy',
        'finalDataBy',
        'openQuestions',
        'codeframeRequired',
        'rawDataFormat',
        'crossTabsRequired',
        'tabFormat',
        'verbFormat',
        'notes'
	];

    public function path()
    {
        return '/projects/' .  $this->id;
    }

    public function panels()
    {
        return $this->hasMany(Panel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

}
