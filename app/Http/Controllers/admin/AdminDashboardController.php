<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FeesCollecator;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userTids()
    {
        return FeesCollecator::with('User')->get();
        $tids = FeesCollecator::with('User')->get();
        return view('admin.dashboard.userTids',compact('tids'));
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

    public function approvedUsers()
    {
        $users = User::where('status','approved')->get();
        return view('admin.dashboard.approvedUsers',compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.dashboard.rejectedUser',compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::get();
        return view('admin.dashboard.easypaisUser',compact('users'));
    }

    public function approveUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success','Account has beed Approved successfully');
    }

    public function rejectUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success','Account has been Rejected successfully');
    }

}
