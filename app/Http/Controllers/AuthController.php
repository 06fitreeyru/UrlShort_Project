<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){

       $credetail = [
        'email' => $request->email,
        'password' => $request->password
       ];
       if(Auth::attempt($credetail)) {
        return redirect()->route('adminHome')->with('success','Login Success');
       }
       return back()->with('error','Login Failure');
    }
    public function adminHome(){
        return view('adminHome');
    }
    public function logout(){
       Auth::logout();
       return redirect()->route('login');
    }
    
    
}
