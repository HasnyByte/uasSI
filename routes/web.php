<?php

use Illuminate\Support\Facades\Route;

Route::get('/adminDashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/adminPengguna', function () {
    return view('admin.pengguna');
})->name('pengguna');

Route::get('/adminEvent', function () {
    return view('admin.event');
})->name('event');

Route::get('/adminReview', function () {
    return view('admin.review');
})->name('review');
