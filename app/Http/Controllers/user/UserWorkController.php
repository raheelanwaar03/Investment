<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
        ]);

        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->widthraw_bank = $validated['widthraw_bank'];
        $widthraw->widthraw_amount = $validated['widthraw_amount'];
        $widthraw->save();
        return redirect()->back()->with('success','You have successfully requested for widthraw you will notify when admin approved');

    }

}