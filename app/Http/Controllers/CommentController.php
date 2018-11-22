<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request)
    {
//       return $request;
       $comment = new Comment();
        $comment->post_id = $request->id;
        $comment->commentBody = $request->postbody;
        $comment->user_id = Auth::id();
        $comment->status= '1';
        $comment->save();
        return response()->json(['message',"comment posted"]);
    }

    public static function show($id)
    {
       $comment = Comment::where('post_id',$id)->get();
       return $comment;
    }
    public static function countComments($id){
        $comment = Comment::where('post_id',$id)->count();
        return $comment;
    }
    public static function countReaction($id){
        $reaction = Comment::where('reaction',$id)->count();
        return $reaction;
    }

}
