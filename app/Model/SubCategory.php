<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
   public function posts(){
       return $this->hasMany('posts');
   }

   public function Category(){
       $this->hasMany(Category::class);
   }
}
