<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'profile_for'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required|max:10',
            'password'=>'required|min:6|confirmed'
        ]);
      $user =   User::create([
            'profile_for'=>$request->profile_for,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password)
            ]);
            Auth::login($user);

        return redirect()->route('userProfile')->with('success','Registration Successfully, Complete Your Profile');
    }

    public function loginIndex(){
        return view('auth.login');
    }

    public function login(Request $request){
         $request->validate([
            'email'=>'required',
            'password'=>'required'
         ]);

         $user = User::where('email',$request->email)->first();
         if($user && $user->status ==0 ){
            return back()->with('error','Your Account is Blocked by Admin');
         }
        $credentials = $request->only('email','password',);
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'status'=>1
        ])){
            return redirect()->route('userHome');
        }
        return back()->with('error','Invalid Email or Password');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('userHome')->with('success','Logout Successfully');
    }
}