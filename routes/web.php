<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\GroupHandler;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->guard('agency')->check()) {
        return Redirect::route('agency.dashboard');

    } elseif (auth()->guard('customer')->check()) {
        return Redirect::route('customer.dashboard');

    } elseif (auth()->guard('admin')->check()) {
        return Redirect::route('admin.dashboard');

    } else {
        return Redirect::route('login');
    }
})
    ->name('dashboard');

// customers
Route::prefix('customer')
    ->name('customer.')
    ->middleware(['auth:customer', 'verified'])
    ->group(function ($request) {
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::get('/item', function(){return view('main.item');});
    Route::get('/landing', function(){return view('main_UI.landing');});

    Route::get('/car/details/{id}', [CarController::class, 'showDetails'])->name('details');
    Route::get('allcars', [CarController::class, 'showAllCars'])->name('allCars');
    Route::get('agency/profile/{id}', [CarController::class, 'showAllCarsAgency'])->name('agencyProfile');
    Route::post('requst/send',[RequestController::class, 'store'])->name('send.req');


require __DIR__ . '/auth.php';
require __DIR__ . '/agency.php';
require __DIR__ . '/admin.php';
