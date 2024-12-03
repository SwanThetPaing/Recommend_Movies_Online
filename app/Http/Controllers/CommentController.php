<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use App\Mail\LikerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    
    public function store(Movie $movie)
    {

        request()->validate([
            'body'=>'required | min:10 | max:150'
        ]);

        $movie->comments()->create([
            'body'=>request('body'),
            'user_id'=>auth()->id()
        ]);

        $likers= $movie->likers->filter((fn ($likers) => $liker->id != auth()->id()));

        $likers->each(function($liker) use ($movie)
        {
            Mail::to($liker->email)->send(new LikerMail($movie));
        });

        return redirect('/movies/'.$movie->slug);

    }

    public function destory(Comment $comment)
    {
        $comment->delete();

        return back();
    }


}
