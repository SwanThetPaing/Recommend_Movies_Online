<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 
    public function create()
    {
        return view("auth.register");
    }

    public function store()
    {

        $formdata = request()->validate([
            'name'=>'required|max:255|min:3',
            'username'=>['required','max:255','min:3', Rule::unique('users', 'username')],
            'email'=>['required','email', Rule::unique('users', 'email')],
            'password'=>'required|min:5'
        ]); 

        $user = User::create($formdata);

        auth()->login($user);

        return redirect('/')->with('success','Welcome Dear, '.$user->name);

    }

    public function login()
    {
        return view('auth.login');
    }

    public function post_login()
    {
        $formdata = request()->validate([
            'email'=>['required','email','max:255', Rule::exists('users','email')],
            'password'=>['required','min:5','max:255']
        ],
        [
            'email.required'=>'Please type your Email correctly',
            'password.required'=>'Please type your Password correctly'
        ]);

        if(auth()->attempt($formdata))
        {

            if(auth()->user()->is_admin)
            {
                return redirect('/admin/movies');
            }
            else 
            {
                return redirect('/')->with('success', 'ပြန်လည် ကြိုဆိုပ၊တယ် '.auth()->user()->name);
            }

        }
        else 
        {
            return redirect()->back()->withErrors(['email'=>'User Informations Wrong!!']);
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success','သင့် အကောင့် မှ ထွက်လိုက်ပ၊တယ်');
    }

}
