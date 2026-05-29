<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', DashboardController::class)->name('dashboard.index');

Route::prefix('/auth')->name('auth.')->group(function () {
    require __DIR__ . '/web/auth.php';
});