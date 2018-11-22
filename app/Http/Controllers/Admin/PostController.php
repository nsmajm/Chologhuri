<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('Admin.Post.showPost')->with('posts',$post);
    }
    public function pendingPost(){
        $post = Post::where('status','2')->get();
        return view('Admin.Post.pendingPost')->with('posts',$post);
    }
    public function blockedPost(){
        $post = Post::where('status','0')->get();
        return view('Admin.Post.blockedPost')->with('posts',$post);
    }
    public function editPostForm(Request $request){
        $post = Post::where('id',$request->id)->first();
        return view('Admin.Post.editPost')->with('post',$post);
    }
    public function updatePost(Request $request){
        $post = Post::findOrFail($request->postId);
        $post->status = $request->status;
        $post->update();
        return back();
    }
    public function viewPost(Request $request){
        $post = Post::findOrFail($request->id);
        return view('Admin.Post.ViewPost')->with('post',$post);
    }
    public function deletePost(Request $request){
        $post = Post::findOrFail($request->id)->delete();

    }

    public function showComments(){
        $comments = Comment::all();
        return view('Admin.Comment.showComments')->with('comments',$comments);
    }
public static function getPostTitle($id){
    $post = Post::where('id',$id)->first()->postTitle;
    return $post;
}
public static function getPostSlug($id){
    $post = Post::where('id',$id)->first()->slug;
    return $post;
}

public function deleteComments(Request $request){
    $post = Comment::findOrFail($request->id)->delete();
}

public function editCommentForm(Request $request){
        $comment = Comment::FindOrFail($request->id);
        return view('Admin.Comment.editComment')->with('comment',$comment);
}
public function updateComment(Request $request){
//        return $request;
        $comment = Comment::findOrFail($request->commentId);
        $comment->status = $request->status;
        $comment->update();
        return back();
}

public function showBlockedComments(){
    $post = Comment::where('status','0')->get();
    return view('Admin.Comment.blockComment')->with('comments',$post);
}
}
