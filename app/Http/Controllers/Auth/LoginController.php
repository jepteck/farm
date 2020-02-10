<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use User;
use Illuminate\support\facades\DB;
use Illuminate\Http\Response;

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
    //machinery owner 
 
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated(Request $request, $user ){
    
$user=DB::table('users')->where(['user_type'=>'machinery owner']); 
$user1=DB::table('users')->where(['user_type'=>'machinery hire']); 

        if ($user) {

            return redirect('owners');

         }
        
        if ($user1) {

            return redirect('hires');

        }
//  else {
//     return redirect('hires');
//  }

        

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
