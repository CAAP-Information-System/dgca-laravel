<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){


            if(Auth::user()->status == 'Approved') {
                return $next($request);
            }
            else{
                return response()->view('error.access_denied', [], 403);
            }
        }
        else{
            return redirect('/login')->with('message', 'Login to access Media');

        }
        return $next($request);
    }
}
