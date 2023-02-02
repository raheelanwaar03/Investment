<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\FeesCollecator;
use Illuminate\Http\Request;

class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        return view('auth.registerationFees');
    }

    public function feesDetailStore(Request $request)
    {
        $validated = $request->validate([
            'bank' => 'required',
            'amount' => 'required',
            'tid' => 'required'
        ]);

        if ($validated['amount'] = 670) {
            return 1;
            return redirect()->back()->with('error', 'You have not entered desired Amount');
        } else {
            return 2;
            $feesDetails = new FeesCollecator();
            $feesDetails->user_id = auth()->user()->id;
            $feesDetails->bank = $validated['bank'];
            $feesDetails->amount = $validated['amount'];
            $feesDetails->tid = $validated['tid'];
            $feesDetails->save();
            return redirect('/')->with('success', 'Admin will check your details and notify you when your account activated');
        }
    }
}
