<?php

use App\Models\User;
use App\Models\user\WidthrawBalance;

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
//     $widthrawBalance = WidthrawBalance::where('user_id', auth()->user()->id)->get();
//     return $widthrawBalance->widthraw_amount->count();

// }


function level()
{
    $users = User::where('referal', auth()->user()->username)->get();
    $userRefer = $users->count();
    return $userRefer;
}
