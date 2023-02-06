<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawRequestsController extends Controller
{
    public function allRequests() 
    {
        $widthrawRequests = WidthrawBalance::where('status','pending')->get();
        return view('admin.account.widthrawRequest',compact('widthrawRequests'));
    }
}
