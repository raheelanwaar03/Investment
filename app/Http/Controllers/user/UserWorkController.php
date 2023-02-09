<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserWorkController extends Controller
{
    public function referFriend()
    {
        return view('user.work.refer');
    }

    public function widthrawBalance()
    {
        return view('user.account.widthraw');
    }

    public function widthrawBalanceRequest(Request $request)
    {
        $validated = $request->validate([
            'widthraw_bank' => 'required',
            'widthraw_amount' => 'required',
            'widthraw_name' => 'required',
            'widthraw_num' => 'required',
        ]);

        // Checking Admin Limite

        $adminWidthraw = Setting::where('status',1)->first();
        $adminWidthrawMini = $adminWidthraw->minimum_amount;
        $adminWidthrawMax = $adminWidthraw->maximun_amount;

        if($validated['widthraw_amount'] < $adminWidthrawMini)
        {
            return redirect()->back()->with('error','Your Widthraw request is less than Admin Limite');
        }

        if($validated['widthraw_amount'] >= $adminWidthrawMax)
        {
            return redirect()->back()->with('error','Your Widthraw request is Greater than Admin Limite');
        }

        // See user balance
        if (auth()->user()->balance < $validated['widthraw_amount']) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }

        if (auth()->user()->balance >= $validated['widthraw_amount']) {

            $user = User::where('id',auth()->user()->id)->first();
            $totalBalance = auth()->user()->balance;
            $deductedBalance = $totalBalance - $validated['widthraw_amount'];
            $user->balance = $deductedBalance;
            $user->save();
        }



        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->widthraw_bank = $validated['widthraw_bank'];
        $widthraw->widthraw_amount = $validated['widthraw_amount'];
        $widthraw->widthraw_name = $validated['widthraw_name'];
        $widthraw->widthraw_num = $validated['widthraw_num'];
        $widthraw->save();
        return redirect()->back()->with('success', 'You have successfully requested for widthraw you will notify when admin approved');
    }
}
