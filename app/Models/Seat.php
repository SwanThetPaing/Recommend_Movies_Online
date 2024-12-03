<?php

namespace App\Models;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookers()
    {
        return $this->belongsToMany(User::class);
    }

    public function unBook()
    {
        $this->bookers()->detach(auth()->id());
    }

    public function book()
    {
        $this->bookers()->attach(auth()->id());
    }

}
