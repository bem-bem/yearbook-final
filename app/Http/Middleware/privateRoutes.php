<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class privateRoutes
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
         //if session and request login doesn't exists dont allaw any request  to access protected pages
         if (!session()->has('loggedAdmin') && ($request->path() != route('login_check'))) {
            return redirect()->route('login')->with('error' , 'Admin  acces only!');
            }

        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, ,must-revalidate')
                                ->header('Progma', 'no-cache')
                                ->header('Expires', 'Sat 01 jan 1990 00:00:00 GMT');
    }
}
