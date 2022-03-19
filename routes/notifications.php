<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth:admin', 'verified'])
    ->group(function ($request) {

        // Route::get('/dashboard', [AdminController::class, 'index'])                  ->name('dashboard');
        
        
    });
