<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        // verify if the connected user is an admin (if admin=1) continue to the next request
        // else return a forbidden error 403
        // dd('ok');
        if(auth()->user()->admin == 1)
        {
            return $next($request);
        }
        else
        {
            abort(403);
        }
    }
}
