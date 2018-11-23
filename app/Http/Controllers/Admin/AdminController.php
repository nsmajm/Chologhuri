<?php

namespace App\Http\Controllers\Admin;

use App\Model\Support;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        return view('Admin.Home.index');
    }

    public function viewSupport(){
        $support = Support::all();
        return view('Admin.Support.viewSupport')->with('supports',$support);
    }
    public function viewPendingSupport(){
        $support = Support::where('isSolved','0')->get();
        return view('Admin.Support.viewPendingSupport')->with('supports',$support);
    }
    public function showForm(Request $request){
        $support = Support::findOrfail($request->id);
        return view('Admin.Support.editSupport')->with('support',$support);
    }

    public function solvedSupport(Request $request){
        $support = Support::findOrFail($request->postId);
        $support->isSolved='1';
        $support->solution = $request->solution;
        $support->update();
        Session::put('message','Solution Send To the User');
        return back();
    }
}
