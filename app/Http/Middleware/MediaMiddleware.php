<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MediaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){

            // media == 2
            // user == 0

            if(Auth::user()->access_role == 'media') {
                return $next($request);
            }
            else{
                abort(403);
                return redirect('/home')->with('message', 'Access Denied');
            }
        }
        else{
            return redirect('/login')->with('message', 'Login to access Media');

        }
        return $next($request);
    }
}
