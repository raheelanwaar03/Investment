<?php

use App\Models\User;

function allUser()
{
    $user = User::all()->count();
    return $user;
}

function pendingUsers()
{
    $user = User::where('status','pending')->get()->count();
    return $user;
}

function verifiedUsers()
{
    $user = User::where('status','verified')->get()->count();
    return $user;
}

function rejectedUsers()
{
    $user = User::where('status','rejected')->get()->count();
    return $user;
}

function totalReferFriends()
{
    $user = User::where('refer',auth()->user()->username)->get()->count();
    return $user;
}
