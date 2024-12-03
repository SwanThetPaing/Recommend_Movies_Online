<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieUser;
use App\Models\Hotline;
use App\Models\User;
use App\Models\Seat;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function index()
    {
        return view('/movies/movies',[
            'movies'=>Movie::latest()
            ->filter(request(['search','category','username']))
            ->paginate(4)
        ]);

        // return view('/components/menu', [
        //     'user'=>auth()->user()
        // ]);
    }

    public function show(Movie $movie)
    {
        return view('/movies/movie',[
            'user'=>auth()->user(),
            'movie'=>$movie
            // 'user'=>User::all()
        ]);
    }

    // public function image(User $user)
    // {
    //     return view('/components/menu', [
    //         'user'=>$user
    //     ]);
    // }

    // public function pic()
    // {
    //     return view('/components/single-comment', [
    //         'user'=>auth()->user()
    //     ]);
    // }

    public function like(Movie $movie)
    {
        if(User::find(auth()->id())->isLiked($movie))
        {
            $movie->unLike();
            return redirect('/')->with('success', 'You Unliked '.$movie->name);
        }
        else
        {
            $movie->like();
            return redirect('/')->with('success', 'You Liked '.$movie->name);
        }

        return redirect('/');

    }


}
