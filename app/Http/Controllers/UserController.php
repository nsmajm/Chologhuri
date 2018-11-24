<?php

namespace App\Http\Controllers;

use App\Model\UserInfo;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id){
        $user = User::findOrfail($id);
        return view('');
    }
    public static function getUserName($id){
        $user = User::where('id',$id)->first()->name;
        return $user;
    }
    public static function getUserpic($id){
        $user = UserInfo::where('user_id',$id)->first()->profileImage;
        return $user;
    }
}
