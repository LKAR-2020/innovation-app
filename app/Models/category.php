<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $guarded= [];
    public function annonce()
    {
        return $this->hasMany(annonce::class);
    }
}
