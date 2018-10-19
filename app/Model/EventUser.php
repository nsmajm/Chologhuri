<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
