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
            'tid' => 'required',
            'amount' => 'required'
        ]);

        $lenth = $request->tid;
        $lenthCheck = strlen($lenth);
        if ($lenthCheck <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 digits Trx ID');
        }

        // checking uniqe Trx id.

        $tidChecks = FeesCollecator::get();

        foreach ($tidChecks as $tidCheck) {
            $tidCheck = $tidCheck->tid;
            if ($validated['tid'] == $tidCheck)
                return redirect()->back()->with('error', 'This tid is used before');
        }


        $userAmount = $validated['amount'];

        if ($userAmount != 670) {
            return redirect()->back()->with('error', 'You have not entered desired amount');
        }

        $feesDetails = new FeesCollecator();
        $feesDetails->user_id = auth()->user()->id;
        $feesDetails->bank = $validated['bank'];
        $feesDetails->amount = $validated['amount'];
        $feesDetails->tid = $validated['tid'];
        $feesDetails->save();
        return redirect('/')->with('success', 'Admin will check your details and notify you when your account activated');
    }
}
