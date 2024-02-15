<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            // Check if the user's status is "Approved"
            if (auth()->user()->status === 'Approved') {
                return $next($request);
            } else {
                // Return a 403 error if the user's status is not "Approved"
                return response()->view('error.access_denied', [], 403);
            }
        } else {
            // Redirect to the login page if the user is not authenticated
            return redirect('/login')->with('message', 'Login to access Admin');
        }
    }
}
