<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ApprovalMail;
use App\Models\AccessCode;
use App\Models\File;
use App\Models\SideMeeting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboardv2()
    {
        return view('admin.dashboardv2');
    }
    public function dashboard()
    {
        $userCount = User::count();
        $reservationCount = SideMeeting::count();
        $filesCount = File::count();

        $pendingAccount = User::where('status', 'Pending')->count();

        return view('admin.dashboard', [
            'userCount' => $userCount,
            'reservationCount' => $reservationCount,
            'pendingAccount' => $pendingAccount,
            'filesCount' => $filesCount,
        ]);
    }

    public function account_list(Request $request)
    {
        // Query to retrieve unique countries
        $countries = User::select('country')->distinct()->pluck('country');


        $query = User::query();

        // Check if a specific country is requested for sorting
        if ($request->has('country')) {
            $country = $request->input('country');
            $query->where('country', $country);
        }

        // Check if a specific designation is requested for sorting
        if ($request->has('designation')) {
            $designation = $request->input('designation');
            $query->where('designation', $designation);
        }

        // Order users by country and then by designation
        $query->orderBy('country')->orderBy('designation');

        // Paginate the results
        $users = $query->paginate(10);

        // Count total users
        $usercount = User::count();

        return view('admin.account_list', [
            'users' => $users,
            'usercount' => $usercount,
            'countries' => $countries,
        ]);
    }

    public function file_uploads()
    {
        $files = File::paginate(10);

        return view('admin.file_upload', ['files' => $files,]);
    }

    public function reservation_view()
    {
        $meetings = SideMeeting::paginate(10);
        return view('admin.reservation_view', ['meetings' => $meetings]);
    }

    public function updateAccessRole(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'access_role' => 'required|in:user,admin,media,icao', // Validate that the role is either 'user' or 'admin'
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the access_role attribute
        $user->access_role = $request->input('access_role');

        // Save the updated user
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Access role updated successfully.');
    }

    public function viewPendingAccounts()
    {
        $user = User::all();
        return view('admin.pending_account', ['users' => $user]);
    }
    public function viewUserProfile($id)
    {
        $user = User::find($id);
        if (!$user) {
            // You can customize this part based on how you want to handle a non-existing user
            abort(404, 'User not found');
        }
        return view('admin.account_profile', ['user' => $user]);
    }
    public function approveUser($id)
    {
        $user = User::find($id); // Find the user by ID

        // Update the user status to 'APPROVED'
        $user->status = 'Approved';
        $user->save();

        // Send approval notification email
        Mail::to($user->email)->send(new ApprovalMail($user));

        Session::flash('success', 'User approved successfully');
        return redirect()->back()->with('success', 'User approved successfully.');
    }

    public function deleteAccount(Request $request, $id)
    {
        // Find the meeting by its ID
        $users = User::findOrFail($id);

        $users->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Account deleted successfully.');
    }

    public function accessView()
    {
        return view('auth.access_code');
    }

    public function verifyAccess(Request $request)
    {
        $accessCode = $request->input('access_code');
        $staticAccessCode = "DGCA59APACPH";

        // Check if the inputted access code matches the STATIC_ACCESS_CODE
        if ($accessCode === $staticAccessCode) {
            // Get the currently authenticated user
            $user = Auth::user();

            // Check if the user already has an associated access code
            if (!$user->accessCode) {
                // Create a new AccessCode model instance
                $accessCodeEntry = new AccessCode();
                $accessCodeEntry->access_code = $accessCode;
                $accessCodeEntry->isAccessed = 1;

                // Set the user ID for the access code entry
                $accessCodeEntry->user_id = $user->id;

                // Save the access code entry
                $accessCodeEntry->save();

                // Redirect to the authenticated page
                return redirect()->route('disc-paper');
            }
        }

        // Redirect to the access denied page if the access code is incorrect
        return redirect()->route('403');
    }
}
