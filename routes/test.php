<?php

use Illuminate\Support\Facades\Route;

Route::get('/test-session', function () {
    return response()->json([
        'session_id' => session()->getId(),
        'has_session' => session()->has('_token'),
        'session_all' => session()->all(),
        'auth_check' => auth()->check(),
        'auth_user' => auth()->user(),
    ]);
});

Route::get('/test-auth', function () {
    $user = auth()->user();
    
    if (!$user) {
        return response()->json([
            'status' => 'Not authenticated',
            'message' => 'Please login first'
        ]);
    }
    
    return response()->json([
        'status' => 'Authenticated',
        'user' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
            'role_type' => gettype($user->role),
        ],
        'is_admin_strict' => $user->role === '1',
        'is_admin_loose' => $user->role == '1',
        'can_admin' => $user->can('admin'),
        'session_id' => session()->getId(),
    ]);
});

Route::middleware(['auth'])->get('/test-auth-middleware', function () {
    $user = auth()->user();
    
    return response()->json([
        'status' => 'Auth middleware passed',
        'user' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ],
        'can_admin' => $user->can('admin'),
    ]);
});

Route::middleware(['auth', 'can:admin'])->get('/test-admin', function () {
    return response()->json([
        'status' => 'Admin access granted!',
        'user' => auth()->user()->name,
    ]);
});
