<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContractController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    
    Route::resource('company', CompanyController::class);
    Route::resource('client', ClientController::class);
    Route::resource('contract', ContractController::class);

});



require __DIR__ . '/settings.php';
