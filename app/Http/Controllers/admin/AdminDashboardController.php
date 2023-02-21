<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\FeesCollecator;
use App\Models\User;
use App\Models\user\WidthrawBalance;
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
        $user = User::where('id', $id)->first();
        return view('admin.dashboard.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->balance = $request->balance;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success', 'User Details updated successfully');
    }

    // rest work

    public function userTids()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.userTids', compact('users'));
    }

    public function allUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.allUsers', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.pendingUser', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->with('trxIds')->get();
        return view('admin.dashboard.approvedUsers', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->with('trxIds')->get();
        return view('admin.dashboard.rejectedUser', compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.easypaisUser', compact('users'));
    }

    public function approveUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();

        // Giving upliner commissionS
        $adminLimit = Setting::where('status', 1)->first();
        $referCommission = $adminLimit->refer_amount;
        //  Second Upliner
        $indirectCommission1 = $referCommission * 5 / 100;
        //  getting second user
        $secondUpliner = User::where('username', $user->referal)->first();
        $secondUpliner->balance += $indirectCommission1;
        $secondUpliner->save();
        // Third UPliner
        $indirectCommission2 = $referCommission * 1 / 100;
        // getting third person;
        $thirdUpliner = User::where('username', $secondUpliner->referal)->first();
        $thirdUpliner->balance += $indirectCommission2;
        $thirdUpliner->save();

        return redirect()->back()->with('success', 'Account has beed Approved successfully');
    }

    public function rejectUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'Account has been Rejected successfully');
    }

    // Approve widthraw by admin

    public function approveWidthraw($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'approved';
        $widthraw->save();
        return redirect()->back()->with('success', 'User widthraw request Approved');
    }

    public function rejectWidthraw($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'rejected';
        $widthraw->save();

        $user = User::where('id', $widthraw->user_id)->first();
        $user->balance += $widthraw->widthraw_amount;
        $user->save();
        return redirect()->back()->with('success', 'User widthraw request rejected');
    }
}
