 <?php

    use App\Http\Controllers\Auth\AuthenticatedSessionController;
    use Illuminate\Support\Facades\Route;



    Route::middleware(['guest:agency','guest:admin','guest:customer'])->group(
        function () {

            Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

            Route::post('login', [AuthenticatedSessionController::class, 'store']);
        }
    );

    Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

