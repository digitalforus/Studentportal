<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectStudentsIfAuthenticated
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
        if (Auth::guard('student')->check()) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
