<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
 use App\Http\Controllers\HomeController;



Route::get('/',[HomeController::class,'index'])->name('userHome');

Route::get('register',[AuthController::class,'index'])->name('register');
Route::post('register',[AuthController::class,'register'])->name('userRegister');


Route::get('login',[AuthController::class,'loginIndex'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('userLogin');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::get('profile',[ProfileController::class,'index'])->name('userProfile');
Route::POST('profile/save',[ProfileController::class,'store'])->name('userProfileStore');
Route::get('edit-profile',[ProfileController::class,'editprofile'])->name('userDetailEdit');
Route::post('update-profile',[ProfileController::class,'updateprofile'])->name('userEditSuccess');

Route::get('user/about-us',[HomeController::class,'about'])->name('aboutUs');
Route::get('user/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('user/contact-us',[HomeController::class,'contact'])->name('contactUs');
Route::post('contact/submit',[HomeController::class,'contactSubmit'])->name('submitContact');
Route::get('user/career',[HomeController::class,'career'])->name('career');

Route::get('user-profile/{id}',[ProfileController::class,'detailProfile'])->name('detailProfile');

Route::get('user/all-groom',[HomeController::class,'groomindex'])->name('groomIndex');
Route::get('user/all-bride',[HomeController::class,'brideindex'])->name('brideIndex');

Route::prefix('login')->group(function(){

    Route::get('/admin',[AuthAdminController::class,'showLogin'])->name('loginAdmin');
    Route::post('/login',[AuthAdminController::class,'login'])->name('adminLogin');

});

Route::get('admin/create-user',[UserController::class,'adminAddUserindex'])->name('adminAddUser');
Route::post('admin/user-created',[UserController::class,'adminAddUser'])->name('adminUserAdded');

// Route::get('/dashboard',[AuthAdminController::class,'dashboard'])->middleware('auth:admin');

Route::prefix('admin')->group(function(){
    Route::get('users',[UserController::class,'index'])->name('adminUsers');
    Route::get('/dashboard',[AuthAdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('users/delete/{id}',[UserController::class,'destroy'])->name('adminUserDelete');
    Route::get('users/status/{id}',[UserController::class,'status'])->name('adminUserStatus');
    Route::get('user/edit-profile/{id}',[ProfileController::class,'users'])->name('editUser');
    Route::post('user/edit-profile/{id}',[UserController::class,'adminAddUser'])->name('updateUser');

    Route::get('user/profile',[ProfileController::class,'userprofile'])->name('showUserProfile');
    Route::get('user/profile-approve/{id}',[ProfileController::class,'approveuser'])->name('approveUser');
    Route::get('user/profile-reject/{id}',[ProfileController::class,'rejectuser'])->name('rejectUser');
    Route::get('user-review',[AuthAdminController::class,'usereview'])->name('userReview');
    Route::post('user/review-submit',[AuthAdminController::class,'storeReview'])->name('reviewSubmit');
    
});