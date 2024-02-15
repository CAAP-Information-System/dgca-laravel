<?php

namespace App\Http\Controllers;

use App\Mail\ApprovalMail;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Notifications\ApprovalNotification;
use App\Notifications\RegistrationApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = auth()->user();
        $newspost = News::all();
        // Check if the modal has already been shown in this session
        $modalShown = session('modal_shown', false);

        // Store the flag in the session to ensure it's shown only once per login
        session(['modal_shown' => true]);

        return view('welcome', compact( 'modalShown', 'newspost'));
    }


    // Public routes accessible without authentication

    public function viewGallery()
    {
        $galleryposts = Gallery::all();
        return view('main.gallery.view_gallery', compact('galleryposts'));
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

    public function viewRegistrationPage()
    {
        return view('main.registration');
    }

    public function viewAboutCAAP()
    {
        return view('about-us.about-caap');
    }

    public function viewOurSponsors()
    {
        return view('sponsors.our_sponsors');
    }
    public function viewMedicalSupport()
    {
        return view('main.delegates.medical_support');
    }
    public function viewVenueInformation()
    {
        return view('main.delegates.venue_info');
    }
    public function viewNews()
    {
        $newspost = News::all();
        return view('main.news.news_page', ['newspost' => $newspost]);
    }
    public function viewNewsArticle($id)
    {
        $article = News::find($id);
        return view('main.news.view_article', ['article' => $article]);
    }

    public function viewProgram(){
        return view('error.error_503');
    }

    public function error_503(){
        return view('error.error_503');
    }
    public function error_403(){
        return view('error.error_403');
    }

}
