<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminProductModel;
use App\Models\ShareProduct;
use App\Models\Vistor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class landingPageController extends Controller
{
    public function home()
    {
        return view('LandingPage.welcome');
    }

    public function contact()
    {
        return view('LandingPage.contact');
    }

    public function affilate()
    {
        return view('LandingPage.affliatePage');
    }

    public function productPage($referal = 'default')
    {

        if ($referal != 'default') {
            if (!auth()->user()) {
                return redirect()->route('register', $referal)->with('error', 'Please make your account to see Products');
            }
        } else {
            $productShare = new ShareProduct();
            $productShare->shareby = $referal;
            $productShare->username = auth()->user()->username;
            $productShare->save();
        }



        // get user ip
        $newUser = request()->ip();
        $date = date('Y-m-d');

        $visitor = Vistor::where('ip', request()->ip())->first();
        if (!$visitor) {
            $visitor = new Vistor();
            $visitor->ip = request()->ip();
            $visitor->dateTime = date(now());
            $visitor->save();
            return view('LandingPage.survey');
        }

        $products = AdminProductModel::paginate(9);
        return view('LandingPage.product', compact('products', 'referal'));
    }
}
