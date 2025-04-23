<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    // Registrasi user baru
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email_user',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'nama_user' => $request->name,
            'email_user' => $request->email,
            'password_user' => Hash::make($request->password),
        ]);
        
        $token = $user->createToken('token')->plainTextToken;
        
        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email_user', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password_user)) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logout berhasil']);
    }
}
