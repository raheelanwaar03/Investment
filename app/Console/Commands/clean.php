<?php

namespace App\Console\Commands;

use App\Models\admin\EasyPaisaMangement;
use App\Models\admin\ReferalLevel;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\verificationText;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $easyPaisa = new EasyPaisaMangement();
        $easyPaisa->easy_name = 'test';
        $easyPaisa->easy_num = '9999999999';
        $easyPaisa->text = 'Payment page text from admin';
        $easyPaisa->status = 1;
        $easyPaisa->save();

        // Referal limite
        $setting = new Setting();
        $setting->minimum_amount = '50';
        $setting->maximun_amount = '500';
        $setting->dollar_rate = '287';
        $setting->silver = '10';
        $setting->gold = '20';
        $setting->dimond = '30';
        $setting->status = 1;
        $setting->save();

        // Verification page text

        $verificationText = new verificationText();
        $verificationText->text = 'Welcome to MoviesPay website we will approve your account after checking your given details';
        $verificationText->status = 1;
        $verificationText->save();

        //    set level according to thier referal

        $level = new ReferalLevel();
        $level->level1 = 1;
        $level->level2 = 2;
        $level->level3 = 3;
        $level->level4 = 4;
        $level->level5 = 5;
        $level->level6 = 6;
        $level->level7 = 7;
        $level->level8 = 8;
        $level->level9 = 9;
        $level->level10 = 10;
        $level->status = 1;
        $level->save();


        $user = new User();
        $user->name = 'Admin';
        $user->referal = 'default';
        $user->balance = '0';
        $user->plan = 'dimond';
        $user->phone = '03000000000';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('Movies123@');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->referal = 'default';
        $user->plan = 'dimond';
        $user->balance = '10';
        $user->phone = '03000000000';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();

        return Command::SUCCESS;
    }
}
