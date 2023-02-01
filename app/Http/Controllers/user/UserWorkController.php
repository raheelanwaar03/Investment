<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWorkController extends Controller
{
    public function referFriend()
    {
        return view('user.work.refer');
    }
}
