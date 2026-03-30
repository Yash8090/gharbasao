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

    public function adminAdduser(Request $request, $id = null){

        $request->validate([
            'profile_for'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
              'gender'=>'required',
              'marital_status'=>'required'
        ]);
         

        
        if($id){
            $profile = Profile::with('user')->findorFail($id);
            $user = $profile->user;
            }else{
        $user = new User();
        $profile = new Profile();
        $pass = $request->name.'121';
        $user->password = Hash::make($pass);
    }   
        // user create and edit
        $user->profile_for = $request->profile_for;
         $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->save();

    // ✅ PROFILE SAVE (both create + edit)
    $dob = $request->year.'-'.$request->month.'-'.$request->day;
    $profile->user_id = $user->id;
    $profile->gender = $request->gender;
    $profile->dob = $dob;
    $profile->height = $request->height;
    $profile->religion = $request->religion;
    $profile->marital_status = $request->marital_status;
    $profile->caste = $request->caste;
    $profile->education = $request->education;
    $profile->profession = $request->profession;
    $profile->age = $request->age;
    $profile->income = $request->income;
    $profile->state = $request->state;
    $profile->interested_to = $request->interested;
    $profile->father = $request->fathername;
    $profile->city = $request->city;
    $profile->address = $request->address;
    $profile->about = $request->about;
    $profile->status = 'approved';

    // ✅ IMAGE UPLOAD
    for($i=1;$i<=4;$i++){
        if($request->hasFile('image'.$i)){
            $file = $request->file('image'.$i);
            $imageName = time().'_'.$i.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/images'), $imageName);

            $profile->{'image'.$i} = $imageName;
        }
    }

    $profile->save();

    return back()->with('success', $id ? 'User Updated Successfully' : 'User Created Successfully');

}
    }


