<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = auth()->user();

        return response()->json([
            'message' => 'Successfully logged in',
            'user' => $user,
            'token_type' => 'Bearer',
            'token' => $user->createToken('auth_token')->plainTextToken,
        ]);
    }

    public function register(Request $request)
    {
        $user = User::create($request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6',
        ]));

        return response()->json([
            'message' => 'Successfully registered',
            'user' => $user,
            'token_type' => 'Bearer',
            'token' => $user->createToken('auth_token')->plainTextToken,
        ], 201);
    }
}
