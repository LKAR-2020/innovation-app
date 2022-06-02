<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class albummodel extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [ ];
    public function topmodel()
    {
        return $this->belongsTo(Topmodel::class);
    }
}
