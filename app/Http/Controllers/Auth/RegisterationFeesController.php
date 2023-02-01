<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        return view('auth.registerationFees');
    }
}
