<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\SideMeeting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
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

    public function account_list(){
        $user= User::all();

        return view('admin.account_list', [ 'users' => $user]);
    }

    public function file_uploads(){
        $files = File::all();

        return view('admin.file_upload', [
            'files' => $files,
        ]);
    }

    public function reservation_view(){
        $meetings = SideMeeting::all();
        return view('admin.reservation_view', ['meetings' => $meetings]);
    }
}
