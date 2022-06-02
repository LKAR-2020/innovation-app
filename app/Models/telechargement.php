<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telechargement extends Model
{
    use HasFactory;
    protected $guarded =[] ;
    public function magazine()
    {
        return $this->belongsTo(magazine::class);
    }
}
