<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
    public function UserProfile()
    {
        return view('fontend.pages.profile');
    }
    public function Dashbaord()
    {
        return view('dashboard.pages.home');
    }

    public function UserLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!auth()->attempt($req->only('email', 'password'))) {
            return redirect()->back()->with('fail','Invalid Email Password');
        }else{
           if(auth()->user()->user_type == 'user'){
                return redirect()->route('user.profile');
           }else{
                return redirect()->route('dashbaord.view');
           }
        }
    }

    public function UserLogOut(){
        auth()->logout();
        return redirect()->route('login.view');
    }
}
    // {{-- //development by md abdullah shake (mas it academy) --}}
