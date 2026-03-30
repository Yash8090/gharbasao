<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Admin;

class AuthAdminController extends Controller
{
    public function showLogin(){
        return view('auth.adminlogin');
    }

    public function login(Request $request){
        $admin = Admin::where('email',$request->email)->first();
        if($admin && Hash::check($request->password, $admin->password)){
            session([
                'admin_id'=>$admin->id,
                'admin_name'=>$admin->name
            ]);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error','Invalid Credentials');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function usereview(){
        return view('admin.rating');
    }

     public function storeReview(Request $request){
    $request->validate([
        'name'=>'required',
        'rating'=>'required|integer|min:1|max:5',
        'title'=>'required',
        'comment'=>'required'
    ]);
    Review::create([
        'name'=>$request->name,
        'rating'=>$request->rating,
        'title'=>$request->title,
        'comment'=>$request->comment
    ]);
    return back()->with('success','Review Submitted Successfully');
    }
}