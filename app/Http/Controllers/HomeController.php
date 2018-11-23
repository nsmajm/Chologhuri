<?php

namespace App\Http\Controllers;

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
        $blogPostfirst = \App\Model\Post::with('users')->where('status','1')->latest()->take(1)->get();
        $allPost = \App\Model\Post::with('users')->where('status','1')->orderBy('created_at', 'desc')->skip(1)->take(8)->get();
        return view('testindex')->with('posts',$blogPostfirst)->with('allPost',$allPost);
    }

}
