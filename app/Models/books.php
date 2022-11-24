<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public function comments(){
        return $this->hasmany(comments::class,'books_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'books_user','books_id','user_id');
    }
}
