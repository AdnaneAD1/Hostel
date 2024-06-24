<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RoomsController::class, 'indexpage'])->name('indexpage');
Route::get('/roomlist', [RoomsController::class, 'roomlist'])->name('roomlist');
Route::get('/roomlist2', [RoomsController::class, 'roomlist2'])->name('roomlist2');
Route::get('/roomdetails/{id}', [RoomsController::class, 'roomdetails'])->name('roomdetails');
Route::get('/contact', [RoomsController::class, 'contact'])->name('contact');

//Reservation
Route::post('/reservation', [RoomsController::class, 'store'])->name('reservation');
Route::get('/payment-success', [RoomsController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment-cancel', [RoomsController::class, 'paymentCancel'])->name('payment.cancel');

// Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
