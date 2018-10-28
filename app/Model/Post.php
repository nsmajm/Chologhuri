<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function postImage(){
        return $this->hasMany(PostImage::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
    public function subCategories(){
        return $this->belongsTo(SubCategory::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
