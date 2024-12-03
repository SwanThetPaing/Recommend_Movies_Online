<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function edit(Movie $movie)
    {
        return view('movies.edit', 
        [
            'user' => $user,
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
}
