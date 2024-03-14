<?php

namespace App\Http\Controllers;

use App\Mail\ApprovalMail;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use App\Models\File;
use App\Notifications\ApprovalNotification;
use App\Notifications\RegistrationApproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

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

        return view('welcome', compact('modalShown', 'newspost'));
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
    public function viewHotelRecommendations()
    {
        // Read JSON data from the file
        $hotelsJson = file_get_contents(public_path('json/hotels.json'));

        // Pass the decoded data to the view
        return view('main.delegates.hotel_recommendation', ['hotelsJson' => $hotelsJson]);
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
        // Read JSON data from the file
        $sponsorJson = file_get_contents(public_path('json/sponsors.json'));

        // Pass the decoded data to the view
        return view('sponsors.our_sponsors', ['sponsorJson' => $sponsorJson]);
    }
    public function viewMedicalSupport()
    {
        return view('main.delegates.medical_support');
    }
    public function viewVenueInformation()
    {
        return view('main.delegates.venue_info');
    }
    public function viewUsefulTips()
    {
        return view('main.delegates.useful_tips');
    }
    public function viewContactUs()
    {
        return view('main.contact-us');
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

    public function viewProgram()
    {
        return view('http-message.error_503');
    }
    public function viewTransportSched()
    {
        return view('http-message.error_503');
    }
    public function viewOrderofBusiness()
    {
        return view('http-message.error_503');
    }

    public function viewMyDocuments()
    {
        // Check if a user is authenticated
        if (Auth::check()) {
            // Get the authenticated user using the User model
            $user = User::find(Auth::id());

            // Check if the user is not null
            if ($user) {
                // Retrieve all files uploaded by the authenticated user
                $files = $user->files()->get();

                // Pass the files data to the view
                return view('file_manager.my_documents', compact('files'));
            } else {
                // Handle the case where the user is not found
                return redirect()->back()->with('error', 'User not found.');
            }
        } else {
            // Handle the case where no user is authenticated
            return redirect()->back()->with('error', 'User not authenticated.');
        }
    }


    public function error_503()
    {
        return view('http-message.error_503');
    }
    public function error_403()
    {
        return view('http-message.error_403');
    }
    public function uploadSent()
    {
        return view('http-message.upload-sent');
    }
}
