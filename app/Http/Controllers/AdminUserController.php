<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view("admin.movies.user_control",[
            'users'=>User::latest()->paginate()
        ]);
    }

    public function destory(User $user)
    {
        $user->delete();

        return redirect('/admin/movies/user_control')->with('success','User Account Deleted');
    }
}
