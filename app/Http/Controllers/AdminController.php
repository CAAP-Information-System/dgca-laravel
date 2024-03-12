<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ApprovalMail;
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

    public function account_list()
    {
        $user = User::paginate(10);
        $usercount = User::count();
        return view('admin.account_list', ['users' => $user, 'usercount' => $usercount]);
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

        // Delete the meeting
        $users->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Account deleted successfully.');
    }
}

