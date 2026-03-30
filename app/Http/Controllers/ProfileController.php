<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('user.profile');
    }

    public function store(Request $request){
     $request->validate([
         'profile_image'=>'required|image|mimes:jpg,jpeg,png',
        'gender'=>'required',
        'dob'=>'required',
        'height'=>'required',
        'religion'=>'required',
        'caste'=>'required',
        'city'=>'required',
        'address'=>'required',
        'age'=>'required',
        'state'=>'required',
        'education'=>'required',
        'about'=>'required'
     ]);
     $imageName = null;
     $manager = new ImageManager(new Driver());
     if($request->hasFile('profile_image')){
        $image = $request->file('profile_image');
        $imageName = time().'.webp';
        $img = $manager->read($image)->resize(1080,1080)->toWebp(60);
        $img->save(public_path('uploads/images/'.$imageName));
     }
    
     Profile::create([
          'user_id'=>Auth::id(),
        'gender'=>$request->gender,
        'dob'=>$request->dob,
        'height'=>$request->height,
        'religion'=>$request->religion,
        'caste'=>$request->caste,
        'education'=>$request->education,
        'profession'=>$request->profession,
        'age'=>$request->age,
        'income'=>$request->income,
        'state'=>$request->state,
        'city'=>$request->city,
        'address'=>$request->address,
        'about'=>$request->about,
        'profile_image'=>$imageName,

        'status'=>'pending'
     ]);
        return redirect()->route('userHome')->with('success','Profile Updated Successfully');
    }

    public function editprofile(){
        $profile =  Profile::where('user_id',Auth::id())->first();
        return view('user.editprofile',compact('profile'));
    }
    
    private function saveProfile($profile,$request){
         $profile = Profile::where('user_id',Auth::id())->first();
        $request->validate([
            'name'=>'required',
            'image'=>'nullable|image',
        'gender'=>'required',
        'dob'=>'required',
        'age'=>'required',
        'height'=>'required',
        'religion'=>'required',
        'caste'=>'required',
        'city'=>'required',
        'address'=>'required',
        'state'=>'required',
        'education'=>'required',
        'about'=>'required'
        ]);
        if($request->hasFile('profile_image')){
            if($profile && $profile->profile_image){
                $oldPath = public_path('uploads/images/'.$profile->profile_image);
                if(File::exists($oldPath)){
                    unlink($oldPath);
                }
            }
            $manager = new ImageManager(new Driver());
        $image = $request->file('profile_image');
        $imageName = time().'.webp';
        $img = $manager->read($image)->resize(1080,1080,function($constraint){
            $cosntraint->aspectRatio();
            $cosntraint->upsize();
        })->towebp(60);
        $img->save(public_path('uploads/images/'.$imageName));
        }else{
            $imageName = $profile->profile_image ?? null;
        }
        $profile->update([
            
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'height'=>$request->height,
            'religion'=>$request->religion,
            'caste'=>$request->caste,
            'education'=>$request->education,
            'address'=>$request->address,
            'profession'=>$request->profession,
            'income'=>$request->income,
            'state'=>$request->state,
            'city'=>$request->city,
            'age'=>$request->age,
            'about'=>$request->about,
            'profile_image'=>$imageName,

            'status'=>'pending',
        ]);
    }

    public function updateprofile(Request $request){
       $profile = Profile::Where('user_id',auth()->id())->first();
       $this->saveProfile($profile,$request);
       return back()->with('success','Profile Updated Successfully');
    }
    
    public function userprofile(){
        $profiles = Profile::with('user')->where('status','pending')->latest()->get();
        return view('admin.profile',compact('profiles'));
    }

    public function approveuser($id){
        $profile = Profile::find($id);
        $profile->status = 'approved';
        $profile->save();
        return back();
    }
    public function rejectuser($id){
        $profile = Profile::find($id);
        $profile->status = 'rejected';
        $profile->save();
        return back();
    }
    
        public function users($id){
            $profile = Profile::with('user')->findorFail($id);
            return view('admin.edituser',compact('profile'));
        }

        public function updateUser($id){
            $profile = Profile::findOrFail($id);
            $this->saveProfile($profile,$request);
            return back()->with('success','Profile Updated by Admin Successfully');
        }

        public function detailProfile($id){
            
            $profile = Profile::with('user')->findOrFail($id);
          $similarUsers = Profile::where('id', '!=', $profile->id)
    ->where('city', $profile->city)
    ->with('user')
    ->inRandomOrder()
    ->take(8)
    ->get();
            return view('user.detail',compact('profile','similarUsers'));
        }
}