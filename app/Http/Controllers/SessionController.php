<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view("session.create");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "email" => ["required", "min:2", "max:255", "email"],
            "password" => ["required", "min:8", "max:255"],
        ]);

        if (!auth()->attempt($attributes, $request->filled('remember'))) {
            throw ValidationException::withMessages(["email" => "We can't verify your credits"]);
        }

        $request->session()->regenerate();

        // If user is admin, redirect to dashboard
        if (auth()->user()->role === '1') {
            return redirect()->route('dashboard')->with("success", "Welcome Back Admin!");
        }

        return redirect()->route('home')->with("success", "Welcome Back!");
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login')->with("success", "Goodbye!");
    }
}