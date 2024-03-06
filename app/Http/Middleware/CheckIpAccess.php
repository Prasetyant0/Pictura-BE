<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class CheckIpAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $publicIp = Http::get('https://httpbin.org/ip')->json('origin');
        $clientIp = $request->header('X-Real-IP') ?: $request->header('X-Forwarded-For');

        if (empty($clientIp)) {
            $clientIp = $_SERVER['REMOTE_ADDR'];
        }

        // $allowedIp = ['192.168.225.246'];
        $allowedIp = ['127.0.0.1'];

        // dd($request->ip());
        if (!in_array($clientIp, $allowedIp)) {
            return redirect()->back()->with('error', 'Access denied from your IP address.');
        }
        return $next($request);
    }
}
