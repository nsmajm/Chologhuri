<?php

namespace App\Http\Controllers;

use App\Model\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class SupportController extends Controller
{

    public function index()
    {
      return view('Contact.index');
    }
    public function postSupport(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
            $support = new Support();
            if(Auth::id()){
                $support->name = Auth::user()->name;
                $support->email = Auth::user()->email;
            }
            else{
                $support->name = $request ->name;
                $support->email = $request ->email;
            }

            $support->message = $request ->message;
            $support->isSolved ='0';
            $support->save();
            Session::put('message','Completed');
            return back();
    }

}
