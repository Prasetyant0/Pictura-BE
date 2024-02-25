<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class firstReg
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::check()) {
            return redirect()->back();
        } elseif (!Auth::check()) {
            return redirect()->route('landing');
        }

        $response = $next($request);
        if (session('showModal') && !session('modalDisplayed')) {
            $response->original->gatherData()['modalData'] = ['showModal' => true];
            session()->put('modalDisplayed', true);
        }

        return $response;
    }
}
