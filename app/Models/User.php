<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'prenom',
        'contact',
        'date',
        'socialite_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function topmodel()
    // {
    //     // return $this->belongsToMany(Topmodel::class, 'topmodel_user', 'user_id' , 'topmodel_id')->withPivot('active');
    //     return $this->belongsToMany(Topmodel::class)
    //     ->as('subscription')
    //     ->withTimestamps();
        
    // }
    public function Likes()
    {
        return $this->hasMany(like::class);
    }
    
}
