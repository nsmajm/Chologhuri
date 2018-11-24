<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPostfirst = Post::with('users')->where('status','1')->latest()->take(1)->get();
        $allPost = Post::with('users')->where('status','1')->orderBy('created_at', 'desc')->skip(1)->take(6)->get();

        return view('testindex')->with('posts',$blogPostfirst)->with('allPost',$allPost);
    }
    public function blogpage(){
//        $blogPostfirst = Post::with('users')->where('status','1')->latest()->take(1)->get();
        $allPost = Post::with('users')->where('status','1')->orderBy('created_at', 'desc')->paginate(8);
        return view('pages.blogpage')->with('allPost',$allPost);
    }
    public function showByCategory($id){
//        $blogPostfirst = Post::with('users')->where('status','1')->where('category_id',$id)->latest()->take(1)->get();
        $allPost = Post::with('users')->where('status','1')->where('category_id',$id)->orderBy('created_at', 'desc')->paginate(8);
        return view('pages.blogpage')->with('allPost',$allPost);
    }
    public function showBySubCategory($id){
//        $blogPostfirst = Post::with('users')->where('status','1')->where('category_id',$id)->latest()->take(1)->get();
        $allPost = Post::with('users')->where('status','1')->where('subcategory_id',$id)->orderBy('created_at', 'desc')->paginate(8);
        return view('pages.blogpage')->with('allPost',$allPost);
    }

}
