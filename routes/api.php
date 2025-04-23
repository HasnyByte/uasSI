<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\DestinasiWisataController;
use App\Http\Controllers\Api\KulinerController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [UsersController::class, 'register']);
Route::post('/login', [UsersController::class, 'login']);
Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/destinasi', [DestinasiWisataController::class, 'index']);
Route::get('/destinasi/{id}', [DestinasiWisataController::class, 'show']);

Route::get('/kuliner', [KulinerController::class, 'index']);
Route::get('/kuliner/{id}', [KulinerController::class, 'show']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/{id}', [EventController::class, 'show']);
Route::post('/event', [EventController::class, 'store'])->middleware('auth:sanctum');
Route::put('/event/{id}', [EventController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/event/{id}', [EventController::class, 'destroy'])->middleware('auth:sanctum');

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/review/{id}', [ReviewController::class, 'show']);
Route::post('/review', [ReviewController::class, 'store'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->get('/profile', [AuthController::class, 'profile']);