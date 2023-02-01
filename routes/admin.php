<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth','admin')->group(function () {
    Route::get('/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('/All/Users',[AdminDashboardController::class,'allUsers'])->name('All.Users');
});
