<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/u', [AllController::class, 'no_chat'])->name('home');
Route::get('/u/chat', [AllController::class, 'chat'])->name('home');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
