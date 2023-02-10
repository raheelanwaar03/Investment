<?php

use App\Models\admin\Setting;
use App\Models\ShareProduct;
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

    if ($userLevel >= 5) {
        $userLevel = 'Level 1';
    }

    if($userLevel >= 20)
    {
        $userLevel = 'Level 2';
    }

    if ($userLevel >= 45) {
        $userLevel = 'Level 3';
    }

    return $userLevel;
}


function productShareReward()
{
    $productShare = ShareProduct::where('shareby',auth()->user()->username)->get();
    $totalProduct = $productShare->count();
}

// indirect commission

function indirectCommission()
{
    $adminLimit = Setting::where('status',1)->first();
     // Giving upliner commissionS
     $referCommission = $adminLimit->refer_amount;
    //  first upliner
     $indirectCommission = $referCommission * 25 / 100;
     //  Third Upliner
     $indirectCommission2 = $referCommission * 1 / 100;

    //  getting user

    $users = User::where('username',auth()->user()->referal)->get();
    foreach ($users as $user) {
        $user = User::where('username',$user->username)->first();
        $user->balance += $indirectCommission;
        $user->save();
    }

}

function secondCommission()
{
    $adminLimit = Setting::where('status',1)->first();
    // Giving upliner commissionS
    $referCommission = $adminLimit->refer_amount;
     //  Second Upliner
     $indirectCommission1 = $referCommission * 5 / 100;

    //  getting user

     $users = User::where('username',auth()->user()->referal)->get();
     foreach ($users as $user) {
         $users = User::where('username',$user->username)->get();
         foreach($users as $user)
         $user = User::where('username',$user->username)->first();
         $user->balance += $indirectCommission1;
         $user->save();
     }
}

function thirdCommission()
{
    $adminLimit = Setting::where('status',1)->first();
    // Giving upliner commissionS
    $referCommission = $adminLimit->refer_amount;
     //  Second Upliner
     $indirectCommission2 = $referCommission * 1 / 100;

    //  getting user

     $users = User::where('username',auth()->user()->referal)->get();
     foreach ($users as $user) {
        $users = User::where('username',$user->username)->get();
        foreach($users as $user)
        $users = User::where('username',$user->username)->get();
        foreach($users as $user)
        $users = User::where('username',$user->username)->get();
        foreach($users as $user)
        {
            $users = User::where('username',$user->username)->first();
            $user->balance += $indirectCommission2;
            $user->save();
        }
    }

}

