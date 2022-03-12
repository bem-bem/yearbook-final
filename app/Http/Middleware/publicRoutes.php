<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class publicRoutes
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
        // return back if the admin already login
        if (session()->has('loggedAdmin')) {
            return back();
        }
        return $next($request);
    }
}
