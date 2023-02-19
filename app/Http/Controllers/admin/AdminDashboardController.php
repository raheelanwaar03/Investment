<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FeesCollecator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // user edit option for admin

    public function editUser($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.dashboard.editUser',compact('user'));
    }

    public function updateUser(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->balance = $request->balance;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success','User Details updated successfully');

    }



    // rest work

    public function userTids()
    {
        $users = User::where('status','pending')->with('trxIds')->get();
        return view('admin.dashboard.userTids',compact('users'));
    }

    public function allUsers()
    {
        $users = User::where('status','pending')->with('trxIds')->get();
        return view('admin.dashboard.allUsers',compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status','pending')->with('trxIds')->get();
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
        $users = User::with('trxIds')->get();
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
