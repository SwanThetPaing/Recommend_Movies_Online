<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Seat;
use App\Models\MovieUser;
use App\Models\hotline;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $with=['category','user'];

    
public function scopeFilter($query, $filter)
{   

    $query->when($filter['search']??false, function ($query, $search)
        {
           $query->where(function ($query) use ($search)
            {
                $query->where('name', 'LIKE', '%'.$search.'%')
                ->orwhere('rating', 'LIKE', '%'.$search.'%');
            });
        });

        $query->when($filter['category']??false, function ($query, $slug)
        {
           
           $query->whereHas('category', function ($query) use ($slug)
            {
                $query->where('slug', $slug);
            });

        });

        $query->when($filter['username']??false, function ($query, $username)
        {
           
           $query->whereHas('user', function ($query) use ($username)
            {
                $query->where('username', $username);
            });

        });


}

public function category()
{
    return $this->belongsTo(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

public function movie_user()
{
    return $this->hasMany(Movie_User::class);
}

public function comments()
{
    return $this->hasMany(Comment::class);
}

public function likers()
{
    return $this->belongsToMany(User::class);
}

public function unLike()
{
    $this->likers()->detach(auth()->id());
}

public function like()
{
    $this->likers()->attach(auth()->id());
}

public function hotlines()
{
    return $this->hasMany(Hotline::class);
}

public function seats()
{
    return $this->hasMnay(Seat::class);
}

}
