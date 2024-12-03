<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    
    
    public function index()
    {
        return view('/seats/seats',[
            'movies'=>Movie::latest(),
            'seats'=>Seat::latest()
            ->paginate(8)
        ]);
    }

    public function show()
    {
        return view('/seats/seat',[
            'seat'=>Seat::latest(),
            'movie'=>Movie::latest()
        ]);
    }

    public function book(Seat $seat)
    {
        if(User::find(auth()->id())->isBooked($seat))
        {
            $seat->unBook();
            return redirect('/')->with('success', 'You Unliked '.$seat->name);
        }
        else
        {
            $seat->book();
            return redirect('/')->with('success', 'You Booked '.$seat->name);
        }

        return redirect('/');

    }

}
