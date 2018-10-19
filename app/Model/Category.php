<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategory(){
        return $this->hasMany(SubCategory::class);
    }
}
