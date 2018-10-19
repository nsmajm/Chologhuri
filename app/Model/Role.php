<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   public function user(){
       return $this->hasMany(User::class);
   }

}
