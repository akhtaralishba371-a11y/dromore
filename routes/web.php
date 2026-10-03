<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/startednow', [IndexController::class, 'startednow'])->name('startednow');

// table
Route::resource('bookings', BookingController::class);  // CRUD routes for bookings
