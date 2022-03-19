<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\NotificationController;
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
// admins
// Route::prefix('admin')
//     ->name('admin.')
//     ->middleware(['auth:admin', 'verified'])
//     ->group(function ($request) {

//         Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
//         Route::get('/notification',[NotificationController::class, 'index']) ->name('notify');

//         Route::get('/notification/add',[NotificationController::class, 'create']) ->name('notify.add');

//     });
// agencies
// Route::prefix('agency')
//     ->name('agency.')
//     ->middleware(['auth:agency', 'verified'])
//     ->group(function ($request) {

//         Route::get('/dashboard', [AgencyController::class, 'index'])->name('dashboard');

//     });
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
    Route::get('allcars', [CarController::class, 'showAllCars']);
    Route::get('agency/profile/{id}', [CarController::class, 'showAllCarsAgency'])->name('agencyProfile');

require __DIR__ . '/auth.php';
require __DIR__ . '/agency.php';
require __DIR__ . '/admin.php';
