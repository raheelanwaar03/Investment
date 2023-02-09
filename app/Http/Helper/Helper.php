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

// Level function

function level()
{

    $users = User::where('referal', auth()->user()->username)->get();
    $userLevel = $users->count();

        if ($userLevel = 1) {
            $userLevel = 'Level1';
        }

    if ($userLevel = 2) {
        $userLevel = 'Level2';
    }

    if ($userLevel = 3) {
        $userLevel = 'Level2';
    }

    return $userLevel;
}
