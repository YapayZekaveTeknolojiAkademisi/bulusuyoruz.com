<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
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

    // Event Routes
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    
    // Import Routes (Temporary)
    // Route::get('/import-data', [App\Http\Controllers\ImportController::class, 'show'])->name('import.show');
    // Route::post('/import-data', [App\Http\Controllers\ImportController::class, 'store'])->name('import.store');
});

// Public Event Routes
Route::get('/e/{event:slug}', [EventController::class, 'show'])->name('events.show');
Route::post('/e/{event:slug}/respond', [App\Http\Controllers\ResponseController::class, 'store'])->name('events.respond');

Route::get('/participate', function () {
    return view('events.participate');
})->name('events.participate'); // Requires update to take event slug later

Route::get('/result', function () {
    return view('events.result');
})->name('events.result');

require __DIR__.'/auth.php';
