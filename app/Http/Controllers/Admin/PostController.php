<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('Admin.Post.showPost')->with('posts',$post);
    }
}
