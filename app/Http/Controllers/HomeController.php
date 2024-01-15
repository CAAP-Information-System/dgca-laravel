<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\ApprovalNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        // Check if the modal has already been shown in this session
        $modalShown = session('modal_shown', false);

        // Store the flag in the session to ensure it's shown only once per login
        session(['modal_shown' => true]);

        return view('welcome', compact('user', 'modalShown'));
    }


    public function viewGallery()
    {
        return view('main.conference.gallery');
    }

    public function viewWelcomeMessage()
    {
        return view('main.conference.welcome_message');
    }
    public function viewAgenda()
    {
        return view('main.conference.agenda');
    }

    public function viewParticipants()
    {
        return view('main.conference.participants');
    }

    public function viewListParticipants()
    {
        return view('main.conference.participant_list.participant_list');
    }


    public function viewDelegateCorner()
    {
        return view('main.delegates.conf_bulletin');
    }

    public function sendNotif()
    {
        $user = User::all();

        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is our example notification tutorial',
            'actiontext' => 'View Our Site',
            'actionURL' => url('/'),
            'lastline' => 'Thank you for using our application!',

        ];

        Notification::send($user, new ApprovalNotification($details));

        dd('done');
    }
}
