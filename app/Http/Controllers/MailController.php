<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ApprovalMail;
use App\Models\Approval;
use App\Models\User;
use App\Notifications\RegistrationApproval;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request, $id){
        $approval = Approval::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $user = User::first();
        $user->notify(new RegistrationApproval($approval));
    }
}
