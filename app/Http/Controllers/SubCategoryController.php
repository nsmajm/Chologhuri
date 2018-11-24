<?php

namespace App\Http\Controllers;

use App\Model\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function show($id)
    {
//        $states = DB::table("state")->where("country_id",$id)->pluck("name","id");
        $subCategory = SubCategory::where('category_id',$id)->pluck("subCategoryName","id");
        return $subCategory;
    }
     public static function getSubCateogryName($id){
         $category = SubCategory::findOrFail($id);
         return $category->subCategoryName;
     }

}
