<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\SideMeeting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboardv2(){
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
        $user = User::all();

        return view('admin.account_list', ['users' => $user]);
    }

    public function file_uploads()
    {
        $files = File::all();

        return view('admin.file_upload', [
            'files' => $files,
        ]);
    }

    public function reservation_view()
    {
        $meetings = SideMeeting::all();
        return view('admin.reservation_view', ['meetings' => $meetings]);
    }

    public function updateAccessRole(Request $request)
    {
        // Log the request data
        logger($request->all());

        $request->validate([
            'access_role' => 'required|in:admin,guest',
        ]);

        $userIdsAndRoles = $request->input('access_role');

        foreach ($userIdsAndRoles as $userId => $accessRole) {
            $user = User::find($userId);

            if ($user) {
                $user->update(['access_role' => $accessRole]);
            } else {
                logger("User with ID $userId not found.");
            }
        }

        return redirect()->back()->with('success', 'Access roles updated successfully');
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
    public function approveUser($id){

            $user = User::find($id); // Find the user by ID

            // Update the user status to 'APPROVED'
            $user->status = 'Approved';
            $user->save();
            Session::flash('success', 'User approved successfully');
            return redirect()->back()->with('success', 'User approved successfully.');
    }
}
