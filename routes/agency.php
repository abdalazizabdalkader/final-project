<?php
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CarController;
use App\Models\Notification;

Route::prefix('agency')
    ->name('agency.')
    ->middleware(['auth:agency', 'verified'])
    ->group(function ($request) {

        // Route::get('/dashboard', [AgencyController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', function(){ return view('agency-dashbord.main');})->name('dashboard');
        // Notifications
        Route::get('/notifications', [NotificationController::class, 'notifyAgencies'])->name('notify');
        Route::get('/notifications/add', function(){return view('agency-dashbord.add-noti');})->name('notify.add');
        Route::post('/notifications/store', [NotificationController::class, 'store'])->name('notify.store');
        // Route::post('/notifications/store', [NotificationController::class, 'store'])->name('notify.store');

        //Cars
        Route::get('/cars', [CarController::class, 'carsAgency'])->name('cars');
        Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
        Route::post('/car/store', [CarController::class, 'store'])->name('cars.store');
        Route::post('/unactive/{id}', [CarController::class, 'unactive'])->name('unactive');

        //edit profile
        Route::get('/editProfile', [AgencyController::class,'edit'])->name('edit');
        Route::post('/prodilepudate/{id}', [AgencyController::class, 'update'])->name('update');


        //test
        // Route::get('/test', [NotificationController::class, 'show'])->name('test');
    });
