<?php

use App\Models\User;

function allUser()
{
    $user = User::all()->count();
    return $user;
}

function pendingUsers()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function verifiedUsers()
{
    $user = User::where('status', 'verified')->get()->count();
    return $user;
}

function rejectedUsers()
{
    $user = User::where('status', 'rejected')->get()->count();
    return $user;
}

function totalReferFriends()
{
    $user = User::where('referal', auth()->user()->username)->get()->count();
    return $user;
}

// user widhrawal balance

// function userWidthrawalBalance()
// {
//     $widthrawBalance = WidthrawBalance::where('user_id',auth()->user()->id)->get();

//     foreach( $widthrawBalance as $widthraw )
//     {
//         $totalWidthraw = $widthraw->widthraw_amount->count();
//     }

//     return $totalWidthraw;
// }

// Level function

function level()
{
    $users = User::where('referal', auth()->user()->username)->get();
    $userLevel = $users->count();

    if ($userLevel <= 4) {
        $userLevel = 'Level 0';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 5) {
        $userLevel = 'Level 1';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 20) {
        $userLevel = 'Level 2';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 45) {
        $userLevel = 'Level 3';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 70) {
        $userLevel = 'Level 4';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 100) {
        $userLevel = 'Level 5';
    }

    if ($userLevel <= 145) {
        $userLevel = 'Level 6';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }
    if ($userLevel <= 200) {
        $userLevel = 'Level 7';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 270) {
        $userLevel = 'Level 8';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 350) {
        $userLevel = 'Level 9';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    if ($userLevel <= 450) {
        $userLevel = 'Level 10';
        $user = User::where('id', auth()->user()->id)->first();
        $user->level = $userLevel;
        $user->save();
    }

    return $userLevel;
}

