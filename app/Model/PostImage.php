<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    public function post(){
        return $this->hasMany(Post::class);
    }

}
