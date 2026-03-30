<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        $users = User::with('profile')->latest()->simplePaginate(10);
        return view('admin.userindex',compact('users'));
    }

    public function destroy($id){
        $user = User::findorFail($id);
        $user->delete();
        return back()->with('success','User Deleted Successfully');
    }

    public function status($id){
        $user = User::findorFail($id);
        if($user->status ==1){
            $user->status = 0;
        }else{
            $user->status = 1;
        }
        $user->save();
        return back()->with('success','User Status Updated');
    }

    public function adminAddUserindex(){
            return view('admin.register');
    }

    public function adminAdduser(Request $request){
        $pass = $request->name.'121';
        $request->validate([
            'profile_for'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>hash::make($pass),
        ]);

        
        $dob = $request->year.'-'.$request->month.'-'.$request->day;
        $request->validate([
            'gender'=>'required',
            'date'=>'required',
            'month'=>'required',
            'year'=>'required',
            'status'=>'required'
        ]);
        $profile = Profile::create([
              'user_id'=>$user->id,
        'gender'=>$request->gender,
        'dob'=>$dob,
        'height'=>$request->height,
        'religion'=>$request->religion,
        'marital_status'=>$request->status,
        'caste'=>$request->caste,
        'education'=>$request->education,
        'profession'=>$request->profession,
        'age'=>$request->age,
        'income'=>$request->income,
        'state'=>$request->state,
        'interested_to'=>$request->interested,
        'father'=>$request->fathername,
        'city'=>$request->city,
        'address'=>$request->address,
        'about'=>$request->about,
        'status'=>'approved',
        ]);

        for($i=1;$i<=4;$i++){
            if($request->hasFile('image'.$i)){
                $file = $request->file('image'.$i);
                $imageName =  time().'_'.$i.'.'.$file->getClientOriginalExtension();
                $file->move(public_path('uploads/images'),$imageName);
                $profile->{'image'.$i} = $imageName;
            }
            $profile->save();
        }
        return back()->with('success','User Created Successfully');
    }

        
}