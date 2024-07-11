<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailTrackerController;

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/mailing', [HomeController::class, 'mailing'])->name('mailing');

Route::prefix('email')->name('email.')->group(function () {
    Route::get('/open/{email}', [EmailTrackerController::class, 'open'])->name('open');
    Route::get('/click/{email}', [EmailTrackerController::class, 'click'])->name('click');
    Route::get('/unsubscribe/{email}', [EmailTrackerController::class, 'unsubscribe'])->name('unsubscribe');
});