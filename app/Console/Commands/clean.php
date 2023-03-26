<?php

namespace App\Console\Commands;

use App\Models\admin\EasyPaisaMangement;
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
        $setting->refer_amount = '50';
        $setting->minimum_amount = '50';
        $setting->maximun_amount = '500';
        $setting->status = 1;
        $setting->save();

        // Verification page text

       $verificationText = new verificationText();
       $verificationText->text = 'Welcome to DataEntry website we will approve your account after checking your given details';
       $verificationText->status = 1;
       $verificationText->save();


        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->referal = 'default';
        $user->balance = '0';
        $user->address = '318 j.b';
        $user->phone = '03149720318';
        $user->email = 'raheelanwaar0316@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'Hamza Anwaar';
        $user->email = 'raheelanwaar28@gmail.com';
        $user->referal = 'default';
        $user->address = '318 j.b';
        $user->balance = '0';
        $user->phone = '03167007156';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();

        return Command::SUCCESS;
    }
}
