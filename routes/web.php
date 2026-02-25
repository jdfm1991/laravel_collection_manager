<?php

use App\Models\Payment;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('collection', function () {
    $collection1 = [1, 2, 3];
    $collection2 = [4, 5, 6];
    $payment1 = Payment::find(1);
    $payment2 = Payment::find(5);

    $payment1->collections()->sync($collection1);
    $payment2->collections()->sync($collection2);

    return response()->json([
        'payment1' => $payment1,
        'collection1' => $payment1->collections, 
        'payment2' => $payment2,
        'collection2' => $payment2->collections,]
        );
});

require __DIR__ . '/settings.php';
