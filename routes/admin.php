<?php
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\AdminNotify;
use App\Http\Controllers\AdminNotifyController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TypeController;

// use App\Http\Controllers\NotificationController;


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth:admin', 'verified'])
    ->group(function ($request) {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        //notification
        Route::get('/notification',[AdminNotifyController::class, 'index']) ->name('notify');
        Route::get('/notification/add',[AdminNotifyController::class, 'create'])->name('notify.add');
        Route::post('/notification/store',[AdminNotifyController::class, 'store'])->name('notifyStore');

        //agencies
        Route::get('/Agencies',[AgencyController::class, 'index']) ->name('agency');
        Route::get('/agency/add',[AgencyController::class, 'create'])->name('agency.add');
        Route::post('/notification/store',[AgencyController::class, 'store'])->name('agency.store');
        Route::get('/test', [AgencyController::class,'test'])->name('test');

        //Settings
        Route::post('/add.brand', [BrandController::class, 'store'])->name('addBrande');
        Route::post('/add.Color', [ColorController::class, 'store'])->name('addColore');
        Route::post('/add.type', [TypeController::class, 'store'])->name('addType');
        Route::post('/add.country', [CountryController::class, 'store'])->name('addCountry');
        //add subscription
        // Route::post('/add.subscription', [SubscriptionController::class, 'store'])->name('addSubscription');
        //cars
        Route::get('/cars',[CarController::class, 'allCars'])->name('cars');
        Route::get('/cars/setting',[CarController::class, 'carSetting'])->name('carSetting');

        Route::post('/unactive/{id}', [AgencyController::class, 'unactive'])->name('unactive');

        //requests
        Route::get('requests/',[RequestController::class, 'index'])->name('requests');

        //orders 
        // Route::get('/')
    });
