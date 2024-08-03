<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApartmentController;

Route::resource('apartments', ApartmentController::class);
Route::post('/apartments', [ApartmentController::class, 'store'])->name('apartments.store');


