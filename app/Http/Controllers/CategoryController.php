<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all()->where('status','=','1');
        return response()->json($category);
    }
   public static function getCategoryName($id){
        $category = Category::findOrFail($id);
        return $category->categoryName;
   }
}
