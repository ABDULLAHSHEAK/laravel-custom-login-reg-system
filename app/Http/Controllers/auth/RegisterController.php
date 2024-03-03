<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function Register(){
        return view('auth.register');
    }

    public function store(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password
        ]);
        auth()->attempt($req->only('email', 'password'));
        return redirect()->route('user.profile');

    }
}
    // {{-- //development by md abdullah shake (mas it academy) --}}
