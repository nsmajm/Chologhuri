<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('status','=','1')->get();
//        return response()->json($category);
        return view('User.Author.createPost')->with('categories',$category);
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
        $post = new Post();
        $post->user_id = Auth::id();
        $post->postTitle = $request->postTitle;
        $post->slug = str_slug($post->postTitle);
        $post->postBody = $request->postBody;
        $post->status = '0';
        $post->category_id = $request->category;
        $post->subcategory_id = $request->subCategory;
        if($request->has('thumbnail')){}
        $post->postThumbnail = 'avatar.jpg';
        $post->save();
        return $post;


//        $originalImage= $request->file('thumbnail');
//        $thumbnailImage = Image::make($originalImage);
//        $thumbnailPath = public_path().'/thumbnail/';
//        $originalPath = public_path().'/orginal/';
//        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
//        $thumbnailImage->resize(555,279);
//        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

//        $imagemodel= new ImageModel();
//        $imagemodel->filename=time().$originalImage->getClientOriginalName();
//        $imagemodel->save();

//        return back()->with('success', 'Your orginal has been successfully Upload');
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
