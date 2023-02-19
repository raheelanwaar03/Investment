<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\User;
use App\Models\Vistor;

class SurveyProductRewaradController extends Controller
{
    public function index($id)
    {
        $product = AdminProductModel::find($id);
        $procutRewarad = $product->product_price;

        // get user ip

        $visitor = Vistor::where('user_id', auth()->user()->id)->where('id', $id)->first();
        if (!$visitor) {
            // storing product
            $visitor = new Vistor();
            $visitor->user_id = auth()->user()->id;
            $visitor->product_id = $id;
            $visitor->ip = request()->ip();
            $visitor->dateTime = date(now());
            $visitor->save();
            // giving user product reward
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance += $procutRewarad;
            $user->save();
            return view('LandingPage.survey');
        }
        return redirect()->back()->with('error', 'You have been rewarded before for this product');
    }
}
