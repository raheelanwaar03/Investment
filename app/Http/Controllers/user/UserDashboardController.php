<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\User;
use App\Models\user\WidthrawBalance;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function team()
    {
        $users = User::where('referal',auth()->user()->username)->where('status','approved')->get();
        return view('user.work.team',compact('users'));
    }

    public function widthrawReq()
    {
        $widthraws = WidthrawBalance::where('user_id',auth()->user()->id)->get();
        return view('user.work.widthrawReq',compact('widthraws'));
    }

    public function work()
    {
        $products = AdminProductModel::where('product_level',auth()->user()->level)->paginate(6);
        return view('user.work.index',compact('products'));
    }
}
