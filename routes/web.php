<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\DestinasiWisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/adminDashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/adminPengguna', [UsersController::class, 'index'])->name('pengguna');
Route::get('/adminEvent', [EventController::class, 'index'])->name('admin.event.index');
Route::post('/adminEvent', [EventController::class, 'store'])->name('admin.event.store');
Route::get('/adminReview', fn() => view('admin.review'))->name('review');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', [BerandaController::class, 'index'])->name('home');
Route::get('/wisata', [DestinasiWisataController::class, 'listWisata'])->name('wisata');
Route::get('/wisata/{id}', [DestinasiWisataController::class, 'show'])
    ->where('id', '[A-Z]{3}[0-9]+') // contoh: DBW001, DRK012
    ->name('wisata.show');
Route::get('/kuliner', [KulinerController::class, 'listKuliner'])->name('kuliner');
Route::get('/kuliner/{id}', [KulinerController::class, 'show'])
    ->where('id', '[A-Z]{3}[0-9]+') // contoh: DBW001, DRK012
    ->name('kuliner.show');
Route::get('/event', [UserEventController::class, 'index'])->name('event');
Route::get('/event/{id}', [UserEventController::class, 'show'])->name('event.show');
Route::delete('/admin/event/{id}', [EventController::class, 'destroy'])->name('admin.event.destroy');
Route::get('/reviews', [ReviewController::class, 'index']);         // Admin lihat semua review
Route::get('/reviews/{id}', [ReviewController::class, 'show']);     // Admin lihat satu review
Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store');        // User buat review
Route::get('/info', [PageController::class, 'informationDesk'])->name('info.desk');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('components.auth.login'))->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/register', fn() => view('components.auth.register'))->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::post('/logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('/');
})->name('logout');
