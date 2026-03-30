<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\User;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $profiles = Profile::with('user')->where('status','approved')->latest()->get();
        $groom = Profile::with('user')->where('gender','male')->where('status','approved')->get();
        $brides = Profile::with('user')->where('gender','female')->where('status','approved')->get();
        $reviews = Review::latest()->take(6)->get();
        return view('user.home',compact('profiles','groom','brides','reviews'));
    }

    public function about(){
        return view('user.about-us');
    }

    public function gallery(){
        $images = File::files(public_path('images/'));
        return view('user.gallery',compact('images'));
    }

    public function contact(){
        return view('user.contact-us');
    }

    public function contactSubmit(Request $request){
        $request->validate([
            'name'=>'required',
            'email' =>'required',
            'phone'=>'required|min:10',
            'message'=>'required|min:10'
        ]);
        
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'userMessage'=>$request->message
        ];
        Mail::send('user.email',$data,function($mail) use($data){
            $mail->to('info@gharbasaao.com')
            ->subject('New Query Message');

            $mail->from($data['email'],$data['name'],$data['phone'],$data['userMessage']);
        });
        return back()->with('success','Yor Query Submit Successfully! Our Agent will Connect with you soon.');
    }
    public function career(){
        return view('user.career');
    }

    public function groomindex(Request $request){

    $groom = Profile::with('user')->where('gender','male')->where('status','approved');

    $filters = ['city','caste','age'];
    foreach($filters as $filter){
        if($request->has($filter)){
            $values = array_filter((array)$request->$filter);
            if(!empty($values)){
                $groom->whereIn($filter,$values);
                }else{
                    "No Record Found";
                }
            }

        }
    
  
    $grooms = $groom->paginate(12);

    // STEP 4: dropdown data (IMPORTANT 🔥)
    $cities = Profile::whereHas('user', function($q) {
        $q->where('profile_for', 'groom');
    })->distinct()->pluck('city');

    $castes = Profile::whereHas('user',function($q){
        $q->where('profile_for','groom');
    })->distinct()->pluck('caste');
    
    $ages = Profile::whereHas('user',function($q){
        $q->where('profile_for','groom');
    })->distinct()->pluck('age');
    return view('user.allgroom',compact('grooms','cities','castes','ages'));
}

    public function brideindex(Request $request){
        $brides = Profile::with('user')->where('gender','female')->where('status','approved');
        $filters = ['city','caste','age'];
        foreach($filters as $filter){
            if($request->has($filter)){
                $values = array_filter((array)$request->filter);
                if(!empty($values)){
                    $brides->whereIn($filter,$value);
                }
            }
            }
            $bride = $brides->paginate(12);
            $cities = Profile::whereHas('user',function($q){
                $q->where('profile_for','bride');
            })->distinct()->pluck('city');

            $castes = Profile::whereHas('user',function($q){
                $q->where('profile_for','bride');
            })->distinct()->pluck('caste');

            $ages = Profile::whereHas('user',function($q){
                $q->where('profile_for','bride');
            })->distinct()->pluck('age');
        return view('user.allbrides',compact('bride','cities','castes','ages'));
    }     
 

}