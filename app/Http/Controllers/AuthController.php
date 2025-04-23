<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt(['email_user' => $request->email, 'password' => $request->password])) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        $user = User::where('email_user', $request->email)->first();
        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token
]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama_user' => 'required|string|max:255',
            'email_user' => 'required|email|unique:users,email_user',
            'password_user' => 'required|string|min:6',
        ]);

        $user = User::create([
            'nama_user' => $validated['nama_user'],
            'email_user' => $validated['email_user'],
            'password_user' => Hash::make($validated['password_user']),
        ]);

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'message' => 'Registrasi berhasil',
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function profile(Request $request)
    {
        return response()->json($request->user());
    }
}
