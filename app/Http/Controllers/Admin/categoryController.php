<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::with('user')->get()->where('status','=','1');
        return view('Admin.Categories.showCategories')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|unique:categories',
        ]);
            $category = new Category();
            $category->categoryName = $request->categoryName;
            $category->status = '1';
            $category->user_id = Auth::id();
            $category->save();
            Session::flash('success', 'Email was sent');
            return redirect()->route('admin.category.show');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function showArchivedCategory(){
        $category = Category::all()->where('status','=','0');
        return view('Admin.Categories.archivedCategory')->with('categories',$category);
    }
    public function deleteCategory(Request $request){
        $category = Category::findOrFail($request->id);
        $category->status = '0';
        $category->save();
    }
    public function restore(Request $request){
        $category = Category::findOrFail($request->id);
        $category->status = '1';
        $category->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categoryDelete = Category::find($request->id);
        $categoryDelete->delete();
        return back();
    }
}
