<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view("register.create");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "name" => ["required", "min:2", "max:255"],
            "email" => ["required", "min:2", "max:255", "email", Rule::unique("users", "email")],
            "password" => ["required", "min:8", "max:255"],
        ]);

        // Create user with hashed password
        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
            'role' => '0', // Default role
        ]);

        // Login the user
        auth()->login($user, true); // true = remember me
        
        $request->session()->regenerate();

        // If user is admin, redirect to dashboard
        if (auth()->user()->role === '1') {
            return redirect()->route('dashboard')->with("success", "Account created successfully!");
        }

        return redirect()->route('home')->with("success", "Account created successfully!");
    }
}