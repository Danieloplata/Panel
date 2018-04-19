<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Set fillable form fields
	protected $fillable = [
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

    public function panels()
    {
        return $this->hasMany(Panel::class);
    }

}
