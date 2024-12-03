<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotline extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
   
}