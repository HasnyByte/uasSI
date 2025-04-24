<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use Carbon\Carbon;

class AdminController extends Controller
{
    // Proses login admin
    public function login(Request $request)
    {
        $request->validate([
            'id_admin' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('id_admin', $request->id_admin)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return response()->json(['message' => 'Login gagal. ID atau password salah.'], 401);
        }

        // Jika menggunakan token autentikasi
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token
        ]);
    }

    public function dashboard()
    {
        // $totalPengguna = User::count();
        // $totalEvent = Event::whereDate('tanggal_event', '>=', Carbon::now())->count();

        $totalPengguna = User::count();
        $totalEvent = Event::count();

        return view('admin.dashboard', compact('totalPengguna', 'totalEvent'));
    }

    // Proses logout admin (jika pakai Sanctum/token)
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }
}
