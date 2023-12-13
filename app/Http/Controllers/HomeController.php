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
        return view('main.conference.documents.discussion_paper');
    }
    public function viewInformationPapers()
    {
        return view('main.conference.documents.information_paper');
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


}
