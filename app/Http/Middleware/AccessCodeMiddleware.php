<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AccessCodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the currently authenticated user
            $user = Auth::user();

            // Check if the user has completed the access code
            if ($user->accessCode && $user->accessCode->isAccessed == 1) {
                // User has completed the access code, allow access to the requested page
                return $next($request);
            }

        }

        // If the user hasn't completed the access code, redirect them to the access code page
        return redirect()->route('access-code');
    }
}
