<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PanelProvider extends Model
{
    public function panels()
    {
        return $this->belongsTo(Panel::class);
    }
}
