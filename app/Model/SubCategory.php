<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $primaryKey='id';
    protected $table='sub_categories';
   public function posts(){
       return $this->hasMany('posts');
   }

   public function Category(){
       $this->hasMany(Category::class);
   }
}
