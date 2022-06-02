<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

//use Illuminate\Foundation\Auth\User;

class Topmodel extends Model
{
    use  HasFactory;
    // use Searchable;
    protected $guarded= [];
    // public function user()
    // {
        // return $this->belongsToMany(User::class);
    // }
    public function type()
    {
        return $this->hasMany(Type::class);
    }
    public function albummodel()
    {
        return $this->hasMany(albummodel::class);
    }
    public function Likes()
    {
        return $this->hasMany(like::class);
    }
    public function isLikedByLoggedInUser()
    {
        return $this->likes->where('user_id',auth()->user()->id)
                           ->isEmpty() ? false : true;
    }
}
