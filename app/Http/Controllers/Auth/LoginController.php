<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated()
    {
        if (auth()->user()->role == 1) {
                
            return redirect()->route('admin.index');
        }
        else if(auth()->user()->role == 2)
        {
            return redirect()->route('fertilizer.index');
        }
        else if(auth()->user()->role == 3)
        {
            return redirect()->route('form3.index');
        }
        else if(auth()->user()->role==4)
        {
            return redirect()->route('form4.index');
        }
        else if(auth()->user()->role==5)
        {
            return redirect()->route('fertilizerAo.index');
        }
        else if(auth()->user()->role==6)
        {
            return redirect()->route('pesticides.index');
        }
        else if(auth()->user()->role==7)
        {
            return redirect()->route('seeds.index');
        }

    }
       
    public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }




}
