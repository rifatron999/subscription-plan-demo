<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pricing', [PricingController::class, 'pricing'])->name('pricing');
    Route::get('/checkout/{name}', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout-success', [CheckoutController::class, 'success'])->name('checkout.success');

});

require __DIR__.'/auth.php';
