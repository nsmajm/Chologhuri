<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function index()
    {
        $category = SubCategory::where('status','1')->get();
        $sub = Category::all();
        return view('Admin.Categories.showSubCategories')->with('categories',$category)->with('sub',$sub);
    }
    public function store(Request $request)
    {
        $request->validate([
            'subCategoryName' => 'required|unique:sub_categories',
        ]);
        $category = new SubCategory();
        $category->subCategoryName = $request->subCategoryName;
        $category->category_id=$request->sub;
        $category->status = '1';
        $category->save();
        Session::flash('success', 'Sub Category Added');
        return redirect()->route('admin.category.show');


    }
    public function showArchivedCategory(){
        $category = SubCategory::all()->where('status','=','0');
        return view('Admin.Categories.archivedSubCategory')->with('categories',$category);
    }
    public function deleteCategory(Request $request){
        $category = SubCategory::findOrFail($request->id);
        $category->status = '0';
        $category->save();
    }
    public function restore(Request $request){
        $category = SubCategory::findOrFail($request->id);
        $category->status = '1';
        $category->save();
        return back();
    }
    public function destroy(Request $request)
    {
        $categoryDelete = SubCategory::find($request->id);
        $categoryDelete->delete();
        return back();
    }
}
