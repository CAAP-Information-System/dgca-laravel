<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authenticated()
    {
        // Will redirect to Dashboard if logged in as admin
        if(Auth::user()->access_role == 'admin')
        {
            return redirect('admin/dashboard');
        }
        elseif(Auth::user()->access_role == 'media')
        {
            return redirect('/');
        }
    }

    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect('welcome');  // Redirect to the home page if authenticated
        }

        // If there's a session error message, use it
        $errorMessage = session('error');

        // Check if the error message is related to authentication
        if ($errorMessage === 'These credentials do not match our records.') {
            $errorMessage = 'Wrong email or password. Please try again.';
        } elseif ($errorMessage === 'Sorry, you are not yet registered.') {
            $errorMessage = 'You are not registered. Please register first.';
        }

        // Return the login view with the appropriate error message
        return view('auth.login')->with('error', $errorMessage);
    }


}
