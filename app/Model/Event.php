<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function eventUser(){
        return $this->hasMany(EventUser::class);
    }
}
