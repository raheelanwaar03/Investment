<?php

use App\Models\admin\Setting;
use App\Models\ShareProduct;
use App\Models\user\WidthrawBalance;
use App\Models\User;
use Carbon\Carbon;

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
    $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
    $user->balance += 4;
    $user->save();

    $users = User::where('referal',auth()->user()->username)->get();
    $userLevel = $users->count();

    if ($userLevel >= 5) {
        $userLevel = 'Level 1';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 8;
        $user->save();
    }

    if($userLevel >= 20)
    {
        $userLevel = 'Level 2';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 12;
        $user->save();
    }

    if ($userLevel >= 45) {
        $userLevel = 'Level 3';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 16;
        $user->save();
    }

    if ($userLevel >= 70) {
        $userLevel = 'Level 4';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 20;
        $user->save();
    }

    if ($userLevel >= 100) {
        $userLevel = 'Level 5';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 25;
        $user->save();
    }

    if ($userLevel >= 145) {
        $userLevel = 'Level 6';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 30;
        $user->save();
    }
    if ($userLevel >= 200) {
        $userLevel = 'Level 7';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 35;
        $user->save();
    }

    if ($userLevel >= 270) {
        $userLevel = 'Level 8';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 40;
        $user->save();
    }

    if ($userLevel >= 350) {
        $userLevel = 'Level 9';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 45;
        $user->save();
    }

    if ($userLevel >= 450) {
        $userLevel = 'Level 10';
        $user = User::where('id',auth()->user()->id)->whereDate('created_at','>=',Carbon::today())->first();
        $user->balance += 50;
        $user->save();
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

function dailyBalance()
{
    $user = User::where('id',auth()->user()->id)->get();
    return $user->level;
}

