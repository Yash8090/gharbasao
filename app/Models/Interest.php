<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function sender(){
        return $this->belongsTo(User::class,'from_user');
    }

    public function  receiver(){
        return $this->belongsTo(User::class,'to_user');
    }
}