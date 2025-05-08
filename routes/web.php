<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;

// Route::get('/adminDashboard', function () {
//     return view('admin.dashboard');
// })->name('dashboard');
Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/adminPengguna', [UsersController::class, 'index'])->name('pengguna');

// Route::get('/adminPengguna', function () {
//     return view('admin.pengguna');
// })->name('pengguna');

Route::get('/adminEvent', [EventController::class, 'index'])->name('admin.event.index');

Route::post('/adminEvent', [EventController::class, 'store'])->name('admin.event.store');

Route::get('/adminReview', function () {
    return view('admin.review');
})->name('review');


//untuk coba halaman users
// Home
Route::get('/home', function () {
    return view('users.home');
})->name('home');

// Wisata
Route::get('/wisata', function () {
    return view('users.wisata');
})->name('wisata');

// Kuliner
Route::get('/kuliner', function () {
    return view('users.kuliner');
})->name('kuliner');

// Event
Route::get('/event', function () {
    return view('users.event');
})->name('event');

// Detail Wisata
Route::get('/detail-wisata', function () {
    return view('users.detailWisata');
})->name('detailWisata');

// Detail Event
Route::get('/detailevent', function () {
    return view('users.detailevent');
})->name('detailevent');

// Detail Wisate
Route::get('/detailkuliner', function () {
    return view('users.detailkuliner');
})->name('detailkuliner');

//masi gapaham sih sama ini
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
