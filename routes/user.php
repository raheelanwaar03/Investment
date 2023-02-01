<?php

use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserWorkController;
use Illuminate\Support\Facades\Route;


// group routing

Route::name('User.')->prefix('User')->middleware('user','auth')->group(function(){

        Route::get('/Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
        Route::get('/Refer/Friend',[UserWorkController::class,'referFriend'])->name('Refer.New.Friend');

    });

