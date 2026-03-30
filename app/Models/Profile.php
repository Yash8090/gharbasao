<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'dob',
        'height',
        'religion',
        'caste',
        'education',
        'profession',
        'income',
        'father',
        'interested_to',
        'marital_status',
        'age',
        'address',
        'profile_image',
        'country',
        'state',
        'city',
        'about',
        'status'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}