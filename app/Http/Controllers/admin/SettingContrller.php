<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use Illuminate\Http\Request;

class SettingContrller extends Controller
{
    public function setting()
    {
        return view('admin.dashboard.setting');
    }

    public function settingStore(Request $request)
    {
        $validated = $request->validate([
            'refer_amount' => 'required'
        ]);

        $setting = new Setting();
        $setting->refer_amount = $validated['refer_amount'];
        $setting->save();
        return redirect()->back()->with('succss','New Setting Appllied');

    }

}
