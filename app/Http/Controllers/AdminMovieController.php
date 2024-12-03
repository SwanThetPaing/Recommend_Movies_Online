<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminMovieController extends Controller
{
    
    public function index()
    {
        return view("admin.movies.index",[
            'movies'=>Movie::latest()->paginate()
        ]);
    }

    public function create()
    {
        return view("admin.movies.create",[
            'categories'=>Category::all()
        ]);
    }

    public function store()
    {

        $path = request()->file('thumbnail')->store('thumbnails');

        $formData = request()->validate([
            "name" => ["required"],
            "rating" => ["required"],
            "released_date" => ["required"],
            "content" => ["required"],
            "slug" => ["required", Rule::unique('movies', 'slug')],
            "show_date" => ["required"],
            "show_time" => ["required"],
            "discount" => ["required"],
            "ticket_price" => ["required"],
            "category_id" => ["required", Rule::exists('categories', 'id')]
        ]);
        
        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = $path;

        Movie::create($formData);

        return redirect('/')->with('success', 'Movie created successfully!!');

    }
    
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', 
        [
            'movie' => $movie,
            'categories' => Category::all()
        ]);
    }

    public function update(Movie $movie)
    {
        $formData=request()->validate([
            "name" => ["required"],
            "rating" => ["required"],
            "released_date" => ["required"],
            "content" => ["required"],
            "slug" => ["required"], Rule::unique('movies', 'slug')->ignore($movie->id),
            "show_date" => ["required"],
            "show_time" => ["required"],
            "discount" => ["required"],
            "ticket_price" => ["required"],
            "category_id" => ["required", Rule::exists('categories', 'id')]
        ]);

        $formData['user_id'] = auth()->id();
        $formData['thumbnail'] = request()->file('thumbnail') ? 
        request()->file('thumbnail')->store('thumbnails') : $movie->thumbnail;

        $movie->update($formData);

        return redirect('/');

    }

    public function destory(Movie $movie)
    {
        $movie->delete();

        return back();
    }

}
