<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
//        $attributes = request()->validate([
//            'username' => ['required'],
//            'email' => ['required', 'email', 'max:254'],
//            'password' => ['required'],
//        ]);
//
//
//
//        if(! Auth::attempt($attributes)){
//            throw ValidationException::withMessages([
//                'email' => ['The provided credentials are incorrect.'],
//            ]);
//        }
//
//        request()->session()->regenerate();
//
//        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
