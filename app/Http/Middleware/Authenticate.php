<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        flash()
        ->options([
        'timeout' => 3000,
        'position' => 'top-center',
        ])
        ->addError('You are not logged in yet! Please log in.');
        return $request->expectsJson() ? null : route('landing');
    }
}
