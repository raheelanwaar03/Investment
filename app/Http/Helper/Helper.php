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
     $indirectCommission = $referCommission * 25 / 100;
     $upLiners = User::where('referal',auth()->user()->username)->get();
     foreach ($upLiners as $upLiner)
     {
         $user = User::where('username',$upLiner->referal)->first();
         $user->balance += $indirectCommission;
         $user->save();
     }


}
