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
}
