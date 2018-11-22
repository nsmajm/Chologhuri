<?php

namespace App\Http\Controllers;

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
}
