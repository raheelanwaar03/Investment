<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class feesCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->status == 'approved'){
            return $next($request);
        }
        else
        {
            return redirect()->back()->with('error','Please wait for your Account Approval Or Pay your Registeration Fees');
        }
    }
}
