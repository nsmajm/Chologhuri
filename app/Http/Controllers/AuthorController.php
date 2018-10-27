<?php

namespace App\Http\Controllers;

use App\Model\Event;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorIndex()
    {
        $post = Post::where('status','1')->latest()->first();
        $event = Event::where('status','1')->where('host_user_id',Auth::id())->get();
        return view('User.Author.mainContent')->with('latestPost',$post)->with('events',$event);
    }


    public function index()
    {
        $post = Post::where('user_id',Auth::id())->where('status','1')->get();

        return view('User.Author.managePost')->with('posts',$post);
    }

    public function deletePost(Request $request){
        $post = Post::findOrFail($request->id);
        $post->status = '0';
        $post->save();
    }
}
