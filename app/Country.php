<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Country
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country query()
 * @mixin \Eloquent
 */
class Country extends Model
{
    protected $guarded = [];

    public $timestamps  = false;

    public function respondents()
    {
        return $this->hasMany(Respondent::class);
    }
}
