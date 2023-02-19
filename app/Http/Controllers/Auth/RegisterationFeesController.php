<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\admin\EasyPaisaMangement;
use App\Models\FeesCollecator;
use Illuminate\Http\Request;

class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        $easyPaisas = EasyPaisaMangement::where('status',1)->get();
        return view('auth.registerationFees',compact('easyPaisas'));
    }

    public function feesDetailStore(Request $request)
    {
        $validated = $request->validate([
            'bank' => 'required',
            'tid' => 'required',
            'bank_username' => 'required',
            'sender_num' => 'required',
        ]);

        // checking the lenght of tid
        $lenth = $request->tid;
        $lenthCheck = strlen($lenth);
        if ($lenthCheck <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 digits Trx ID');
        }

        // checking the length of num
        $num = $request->sender_num;
        $numLength = strlen($num);
        if($numLength <= 10)
        {
            return redirect()->back()->with('error','Please enter 11 charcter num');
        }

        // checking uniqe Trx id.

        $tidChecks = FeesCollecator::get();

        foreach ($tidChecks as $tidCheck) {
            $tidCheck = $tidCheck->tid;
            if ($validated['tid'] == $tidCheck)
                return redirect()->back()->with('error', 'This tid is used before');
        }

        $feesDetails = new FeesCollecator();
        $feesDetails->user_id = auth()->user()->id;
        $feesDetails->bank = $validated['bank'];
        $feesDetails->sender_num = $validated['sender_num'];
        $feesDetails->bank_username = $validated['bank_username'];
        $feesDetails->tid = $validated['tid'];
        $feesDetails->save();
        return redirect('/')->with('success', 'Your details has been submited successfully our team will review your details and approve your account if given information is valid!');
    }
}
