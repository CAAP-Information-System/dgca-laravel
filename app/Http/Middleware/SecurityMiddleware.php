<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->access_role == 'admin') {
                return $next($request);
            }
            elseif(Auth::user()->access_role == 'icao') {
                return $next($request);
            }
            else{
                return response()->view('http-message.error_403', [], 403);
            }
        }
        else{
            return redirect('/login')->with('message', 'Login to access Admin');

        }
        return $next($request);
    }
}
