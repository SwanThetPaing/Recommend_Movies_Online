<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Movie;
use App\Models\Seat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password']= bcrypt($value);
    }

    public function likedMovies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function isLiked($movie)
    {
        return auth()->user()->likedMovies &&
         auth()->user()->likedMovies->contains('id', $movie->id);
    }

    public function bookedSeats()
    {
        return $this->belongsToMany(Seat::class);
    }

    public function isBooked($seat)
    {
        return auth()->user()->bookedSeats &&
         auth()->user()->bookedSeats->contains('id', $seat->id);
    }

    public function seat()
    {
        return $this->belongsToMany(Seat::class);
    }

}
