<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

require __DIR__.'/auth.php';

Route::get('/test', [PagesController::class, 'test'])->name('test');

Route::get('/welcome', [PagesController::class, 'welcome'])->name('dashboard');

Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');