<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function allUsers()
    {
        $users = User::get();
        return view('admin.dashboard.allUsers',compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status','pending')->get();
        return view('admin.dashboard.pendingUser',compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::get();
        return view('admin.dashboard.easypaisUser',compact('users'));
    }

}
