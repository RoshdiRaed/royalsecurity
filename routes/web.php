<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ClientsController,
    ContactController,
    ControllerPageController,
    DashboardController,
    NavigationMenuController,
    PolicyController,
    ReportsController,
    ServicesController,
    ServiseController,
    SettingsController,
    TermsController,
    WelcomeController
};

Route::get('/', WelcomeController::class);
Route::get('/servise', ServiseController::class);
Route::get('/contact', ContactController::class);
Route::get('/controller', ControllerPageController::class);
Route::post('/clients', [ControllerPageController::class, 'store'])->name('clients.store'); // Add this line
Route::get('/services', ServicesController::class);
Route::get('/reports', ReportsController::class);
Route::get('/clients', ClientsController::class);
Route::get('/settings', SettingsController::class);
Route::get('/menu', NavigationMenuController::class); // optional
Route::get('/policy', PolicyController::class);        // optional
Route::get('/terms', TermsController::class);          // optional
// Protected routes (auth only)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});
