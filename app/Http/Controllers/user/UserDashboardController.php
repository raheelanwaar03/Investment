<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\User;
use App\Models\user\Longtext;
use App\Models\user\WidthrawBalance;
use App\Models\Vistor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function team()
    {
        $users = User::where('referal',auth()->user()-> name)->where('status','approved')->get();
        return view('user.work.team',compact('users'));
    }

    public function widthrawReq()
    {
        $widthraws = WidthrawBalance::where('user_id',auth()->user()->id)->get();
        return view('user.work.widthrawReq',compact('widthraws'));
    }

    public function work()
    {
        $products = AdminProductModel::where('product_level',auth()->user()->level)->paginate(6);
        return view('user.work.index',compact('products'));
    }


    // User Type Task

    public function taskText(Request $request,$id)
    {
        $product = AdminProductModel::find($id);
        $productRewarad = $product->product_price;

        $visitor = Vistor::where('user_id',auth()->user()->id)->where('product_id',$id)->whereDate('created_at','=',Carbon::today())->first();

        if ($visitor == null) {
            //     // storing product
                $visitor = new Vistor();
                $visitor->user_id = auth()->user()->id;
                $visitor->product_id = $id;
                $visitor->ip = request()->ip();
                $visitor->dateTime = date(now());
                $visitor->save();
                // Storing User Typed Text
                $taskText = new Longtext();
                $taskText->user_id = auth()->user()->id;
                $taskText->product_id = $id;
                $taskText->save();
                // giving user product reward
                $user = User::where('id', auth()->user()->id)->first();
                $user->balance += $productRewarad;
                $user->save();
                return redirect()->back()->with('massage','You have successfully gained task reward');
            }

            return redirect()->back()->with('error', 'You have been compeleted this task before');

    }

    // user prfile

    public function setting()
    {
        return view('user.account.profile');
    }


}
