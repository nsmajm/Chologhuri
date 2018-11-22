<?php

namespace App\Http\Controllers\Admin;

use App\Model\UserInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
public function showUser(){
    $user = User::get()->where('status','1');
    return view('Admin.Users.users')->with('users',$user);
}
public function showOtherUser(){
    $user = User::get()->where('status','0');
    return view('Admin.Users.otherUsers')->with('users',$user);
}

public function showEditForm(Request $request){
    $user = User::where('id',$request->id)->first();

    return view('Admin.Users.editUser')->with('user',$user);
}

public function updateUser(Request $request){
//    return $request;
    $user = User::findOrFail($request->userId);
    $user->role = $request->role;
    $user->status = $request->status;
    $user->update();
    return back();
}
}
