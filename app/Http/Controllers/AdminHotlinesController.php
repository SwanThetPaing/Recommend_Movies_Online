<?php

namespace App\Http\Controllers;

use App\Models\Hotline;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminHotlinesController extends Controller
{
    
    public function show(Hotline $hotline)
    {
        return view('/movies/movie',[
            'hotlines'=>$hotline,
            'movie'=>Movie::get()->id()
        ]);
    }
    
    public function create()
    {
        return view("admin.movies.create2",[
            'categories'=>Category::all()
        ]);
    }

    public function store(Movie $movie)
    {


        $formData = request()->validate([
            "hotlines"=>["required"],
        ]);
        
        $formData['user_id'] = auth()->id();
        $formData['movie_id'] = $movie->id;

        Hotline::create($formData);

        return redirect('/')->with('success', 'Number created successfully!!');

    }

}
