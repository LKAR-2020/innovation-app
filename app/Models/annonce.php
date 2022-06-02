<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class annonce extends Model
{
    use HasFactory;
    use Searchable;
    protected $guarded= [];
    public function category()  
    {
        return $this->belongsTo(category::class);
    }
}
