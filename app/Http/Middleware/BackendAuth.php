<?php

namespace App\Http\Middleware;

use Closure;

class BackendAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->cookie('api_token')) {

            // Uncomment below when sms verification is working
            // if (!$request->cookie('is_active') && $request->path() != 'backend/activate') {
            //     return redirect()->route('activate.user');
            // }

            return $next($request);
        }
        return redirect()->route('login')->with('message', 'Permission Denied!!! You need to login first.');
    }
}
