<?php

namespace App\Http\Controllers;

use App\Model\Event;
use App\Model\Post;
use App\Model\UserInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController  extends Controller
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
        $post = Post::where('user_id',Auth::id())->get();

        return view('User.Author.managePost')->with('posts',$post);
    }

    public function deletePost(Request $request){
        $post = Post::findOrFail($request->id);
        $post->status = '0';
        $post->save();
    }
    public function showProfile($id){
        $user = User::with('userinfos')->where('users.id','=',Auth::id())->first();
        $post = Post::where('status','1')->where('user_id',Auth::id())->get();
        $userInfo = UserInfo::where('user_id',Auth::id())->first();
        if($userInfo!=null){
            return view('User.Author.ownProfile')->with('users',$user)->with('posts',$post);
        }
        else
            {
                return view('User.Author.updateProfile')->with('users',$user);

            }
    }

    public function updateProfile(Request $request){
        $user = User::where('id',Auth::id())->first();
        $userinfo = UserInfo::where('user_id',Auth::id())->first();
        $user->name = $request->name;
        if(!$userinfo){
            $userinfo = new UserInfo();
        }
        if ($request->hasFile('profileImage')) {
            $file = $request->file('profileImage');
            $filename = Auth::id() . '-' . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move('profile', $filename);
        }
        else{
            $filename = 'avatar.png';
        }
        $userinfo->user_id = Auth::id();
        $userinfo->interestIn = $request->interestedIn;
        $userinfo->address = $request->address;
        $userinfo->dob = $request->dob;
        $userinfo->aboutme = $request->aboutMe;
        $userinfo->profileImage = $filename;
        $user->save();
        $userinfo->save();
        return redirect()->route('author.profile.show',Auth::id());


    }
}
