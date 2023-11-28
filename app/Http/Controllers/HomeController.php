<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('welcome');
    }

    public function viewDiscussionPapers()
    {
        return view('main.conference.disc_paper');
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

    public function viewMeetingRoom()
    {
        return view('main.meeting_room');
    }

    public function viewDelegateCorner()
    {
        return view('main.delegates.delegate_corner');
    }


}
