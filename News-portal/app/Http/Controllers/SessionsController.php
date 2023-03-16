<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');

//        return back()
//            ->withInput()
//            ->withErrors(['email' => 'Your provided credentials could not be verified.',]);
    }
}
