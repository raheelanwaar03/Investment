<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawRequestsController extends Controller
{
    public function allRequests()
    {
        $widthrawRequests = WidthrawBalance::get();
        return view('admin.account.widthrawRequest',compact('widthrawRequests'));
    }

    public function approvedWidthrawal()
    {
        $widthrawRequests = WidthrawBalance::where('status','approved')->get();
        return view('admin.account.approvedWidthraw',compact('widthrawRequests'));
    }

    public function rejectedWidthrawal()
    {
        $widthrawRequests = WidthrawBalance::where('status','rejected')->get();
        return view('admin.account.rejectedWidthrawal',compact('widthrawRequests'));
    }


}
