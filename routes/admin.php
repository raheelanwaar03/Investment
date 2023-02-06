<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\WidthrawRequestsController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth','admin')->group(function () {
    Route::get('/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    Route::get('/All/Users',[AdminDashboardController::class,'allUsers'])->name('All.Users');
    Route::get('/Pending/Users',[AdminDashboardController::class,'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users',[AdminDashboardController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('/Rejected/Users',[AdminDashboardController::class,'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Easypaisa/Users',[AdminDashboardController::class,'easypaisaUsers'])->name('Easypaisa.Users');

    // routes for approving user account
    Route::get('Approve/User/Account/{id}',[AdminDashboardController::class,'approveUserAccount'])->name('Approve.User.Account.Request');
    Route::get('Reject/User/Account/{id}',[AdminDashboardController::class,'rejectUserAccount'])->name('Rejected.User.Account.Request');

    // Widthraw request Routes
    Route::get('/Widthraw/Requests',[WidthrawRequestsController::class,'allRequests'])->name('All.Widthraw.Requests');

    // setting route
    Route::resource('Setting', SettingController::class);
    // add product routes
    Route::resource('Product', ProductController::class);

});

