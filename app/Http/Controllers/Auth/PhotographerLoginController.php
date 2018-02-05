<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PhotographerLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:photographer')->except('logout');
    }
    
    public function showLoginForm(){
        return view('auth.photographer.photographer_login');
    }

    public function login(Request $request){
        // validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
 
        // Attempt to log the admin in 
        if(Auth::guard('photographer')->attempt(['email'=> $request->email,
             'password'=> $request->password], $request->remember)){
            //If successful, then redirect to their intended location
            return redirect()->intended(route('photographer.dashboard'));
        }
        
        // If not successful, then redirect back to the login with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('photographer')->logout();

        if(Auth::guard('admin')->check()){
            return redirect('/admin'); 
        }
        if(Auth::guard('web')->check()){
            return redirect('/home'); 
        }
        else{
            return redirect('/');
        }
        
    }
}
