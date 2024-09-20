<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/u', [AllController::class, 'no_chat'])->name('home');
    Route::get('/u/chat/{uuid}', [AllController::class, 'chat'])->name('chat');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
