<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Symfony\Component\Console\Input\Input;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create($referal = 'default')
    {
        return view('auth.register', compact('referal'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:' . User::class],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'min:11' , 'max:11','unique:' . User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'min:8' , 'max:12' , 'confirmed', Rules\Password::defaults()],
        ]);

        // check if user is regiestering by default
        $referCheck = $request->referal;
        if($referCheck == 'default'){
            return redirect()->back()->with('error','Please register account through someones referal link!');
            }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'referal' => $request->referal,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
