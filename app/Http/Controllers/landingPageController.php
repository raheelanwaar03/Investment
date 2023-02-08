<?php

namespace App\Http\Controllers;

use App\Models\admin\AdminProductModel;
use Illuminate\Http\Request;

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

    public function productPage()
    {
        $products = AdminProductModel::paginate(9);
        return view('LandingPage.product',compact('products'));
    }

}
