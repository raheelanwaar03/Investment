<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\admin\ReferalLevel;
use App\Models\User;
use App\Models\Vistor;
use App\Models\verificationText;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // user edit option for admin

    public function editUser($id)
    {
        $user = User::where('id', $id)->first();
        return view('admin.dashboard.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('massage', 'User Details updated successfully');
    }

    // rest work

    public function userTids()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.userTids', compact('users'));
    }

    public function allUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.allUsers', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->with('trxIds')->get();
        return view('admin.dashboard.pendingUser', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->with('trxIds')->get();
        return view('admin.dashboard.approvedUsers', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->with('trxIds')->get();
        return view('admin.dashboard.rejectedUser', compact('users'));
    }

    public function easypaisaUsers()
    {
        $users = User::with('trxIds')->get();
        return view('admin.dashboard.easypaisUser', compact('users'));
    }

    public function approveUserAccount($id)
    {
        // getting widthraw commission of admin
        $setting = Setting::where('status', 1)->first();
        $silver = $setting->silver;
        $gold = $setting->gold;
        $dimond = $setting->dimond;
        $firstCommission = $setting->first_refer;
        $secondCommission = $setting->second_refer;
        $thirdCommission = $setting->third_refer;

        $user = User::find($id);
        $user->status = 'approved';
        $user->save();

        // checking user selected plan
        $userPlan = $user->plan;
        if ($userPlan = 'silver') {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $silver;
                $firstUpliner->save();
            }
        }

        if ($userPlan = 'gold') {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $gold;
                $firstUpliner->save();
            }
        }

        if ($userPlan = 'dimond') {
            $firstUpliner = User::where('email', $user->referal)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('massage', 'Account has beed Approved successfully');
            }else {
                $firstUpliner->balance += $firstCommission;
                // giving upliner his level
                $mainUser = User::where('referal', $firstUpliner->username)->where('status','approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 5) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 20) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 45) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 70) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 100) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 145) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 200) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 270) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 350) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= 10000) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

            }
        }

        //  getting second user

        //  Second Upliner
        $indirectCommission1 = $secondCommission;
        // getting user
        $secondUpliner = User::where('email', $firstUpliner->referal)->where('status', 'approved')->first();
        if ($secondUpliner == '') {
            return redirect()->back()->with('massage', 'Account has beed Approved successfully');
        } else {
            $secondUpliner->balance += $indirectCommission1;
            $secondUpliner->save();
        }
        // Third UPliner
        $indirectCommission2 = $thirdCommission;
        // getting third person;
        $thirdUpliner = User::where('email', $secondUpliner->referal)->where('status', 'approved')->first();
        if ($thirdUpliner == '') {
            return redirect()->back()->with('massage', 'Account has beed Approved successfully');
        } else {
            $thirdUpliner->balance += $indirectCommission2;
            $thirdUpliner->save();
        };
        return redirect()->back()->with('massage', 'User Approved Successfully');
    }

    public function rejectUserAccount($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('massage', 'Account has been Rejected successfully');
    }

    // set user level

    // public function setLevel()
    // {
    //     $levelCheck = ReferalLevel::where('status', 1)->first();
    //     $level1 = $levelCheck->level1;
    //     $level2 = $levelCheck->level2;
    //     $level3 = $levelCheck->level3;
    //     $level4 = $levelCheck->level4;
    //     $level5 = $levelCheck->level5;
    //     $level6 = $levelCheck->level6;
    //     $level7 = $levelCheck->level7;
    //     $level8 = $levelCheck->level8;
    //     $level9 = $levelCheck->level9;
    //     $level10 = $levelCheck->level10;



    //     $users = User::where('status', 'approved')->get();
    //     foreach ($users as $user) {
    //         $mainUser = User::where('referal', $user->email)->where('status', 'approved')->get();
    //         $referCount = $mainUser->count();

    //         // checking refers from admin side


    //         if (!$mainUser = '') {
    //             if ($referCount <= 4) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 0';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level1) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 1';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level2) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 2';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level3) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 3';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level4) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 4';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level5) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 5';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level6) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 6';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level7) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 7';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level8) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 8';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level9) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 9';
    //                 $user->save();
    //             }
    //             if ($referCount >= $level10) {
    //                 $user = User::where('id', $user->id)->where('status', 'approved')->first();
    //                 $user->level = 'Level 10';
    //                 $user->save();
    //             }
    //         }
    //     }
    //     return redirect()->back()->with('massage', 'Level Given to all users according to their referals');
    // }

    // Verification Details

    public function add()
    {
        $verificationText = verificationText::where('status', 1)->get();
        return view('admin.verification.add', compact('verificationText'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required'
        ]);

        $verificationText = new verificationText();
        $verificationText->text = $validated['text'];
        $verificationText->save();
        return redirect()->back()->with('massage', 'Verfication Page Text Added');
    }

    public function edit($id)
    {
        $verificationText = verificationText::find($id);
        return view('admin.verification.edit', compact('verificationText'));
    }

    public function update(Request $request, $id)
    {
        $verificationText = verificationText::find($id);

        $verificationText->text = $request->text;
        $verificationText->save();
        return redirect()->back()->with('massage', 'Verfication Page Updated successfully');
    }

    // set level routes

    public function levelView()
    {
        $levels = ReferalLevel::where('status', 1)->get();
        return view('admin.level.view', compact('levels'));
    }


    public function levelStore(Request $request)
    {
        $validated = $request->validate([
            'level1' => 'required',
            'level2' => 'required',
            'level3' => 'required',
            'level4' => 'required',
            'level5' => 'required',
            'level6' => 'required',
            'level7' => 'required',
            'level8' => 'required',
            'level9' => 'required',
            'level10' => 'required'
        ]);

        $level = new ReferalLevel();
        $level->level1 = $validated['level1'];
        $level->level2 = $validated['level2'];
        $level->level3 = $validated['level3'];
        $level->level4 = $validated['level4'];
        $level->level5 = $validated['level5'];
        $level->level6 = $validated['level6'];
        $level->level7 = $validated['level7'];
        $level->level8 = $validated['level8'];
        $level->level9 = $validated['level9'];
        $level->level10 = $validated['level10'];
        $level->save();

        return redirect()->back()->with('massage', 'Level according to thier refers');
    }

    public function editLevelView($id)
    {
        $level = ReferalLevel::find($id);
        return view('admin.level.edit', compact('level'));
    }


    public function updateLevelSetting(Request $request, $id)
    {
        $level = ReferalLevel::find($id);

        $level->level1 = $request->level1;
        $level->level2 = $request->level2;
        $level->level3 = $request->level3;
        $level->level4 = $request->level4;
        $level->level5 = $request->level5;
        $level->level6 = $request->level6;
        $level->level7 = $request->level7;
        $level->level8 = $request->level8;
        $level->level9 = $request->level9;
        $level->level10 = $request->level10;
        $level->save();

        return redirect()->back()->with('massage', 'Level setting updated successfully');
    }

    public function todayApprovedUser()
    {
        $users = User::where('status', 'approved')->whereDate('created_at', now()->today())->get();
        return view('admin.dashboard.todayUser', compact('users'));
    }

    public function vistors()
    {
        $vistors = Vistor::get();
        return view('admin.dashboard.vistors', compact('vistors'));
    }
}
