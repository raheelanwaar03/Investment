<?php

namespace App\Http\Controllers;

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

}
