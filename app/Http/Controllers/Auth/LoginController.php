<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
        /*
         * check the error code returns from facebook cancel
         * return to the login page
         *
         */

        if (!$request->has('code') || $request->has('denied')) {
            return redirect()->route('login');
        }

        try {

            $socialUser = Socialite::driver('facebook')->user();

        }

        catch (Exception $e) {

            return redirect()->route('login');

        }
        $findUser = User::where('email',$socialUser->email)->first();

        if($findUser){

            Auth::login($findUser);
          //  return $findUser->socialUser;

            return redirect()->route('home.index');
        }

        else{
            $user = new User();
            $user->name = $socialUser->name;
            $user->email = $socialUser->email;
            $user->password = bcrypt('m\';?>^+;AspB:#;G^WRh~SuCE3V8e&)>5BS?KsVX~7._{]4.V~Ax/mZEgMu3');
            $user->socialUser = '1';
            $user->save();
            Auth::login($user);
            return redirect()->route('home.index');
        }

    }
}
