<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function team()
    {
        $users = User::where('referal',auth()->user()->username)->get();
        return view('user.work.team',compact('users'));
    }

    public function widthrawReq()
    {
        $widthraws = WidthrawBalance::where('user_id',auth()->user()->id)->get();
        return view('user.work.widthrawReq',compact('widthraws'));
    }
}
