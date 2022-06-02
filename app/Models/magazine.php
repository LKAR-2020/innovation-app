<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class magazine extends Model
{
    use HasFactory;
    use Searchable;
    
    protected $guarded= [];
    public function telechargement()
    {
        return $this->hasMany(telechargement::class);
    }
}
