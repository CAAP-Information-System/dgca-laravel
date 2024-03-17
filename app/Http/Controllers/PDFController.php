<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $users = User::get();
        $usercount = User::count();
        $pdf = FacadePdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $data = [
            'title' => '59th DGCA Registration Report',
            'date' => date('m/d/Y'),
            'users' => $users,
        ];
        $pdf->setPaper('A4');
        $pdf->loadView('.PDF.registration-list', $data);
        // Stream the generated PDF
        return $pdf->stream();
    }
    public function pendingAccountsPDF()
    {
        // Retrieve users with pending status
        $users = User::where('status', 'Pending')->get();

        // Count the number of users with pending status
        $usercount = $users->count();

        // Load PDF view with data
        $pdf = FacadePdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $data = [
            'title' => '59th DGCA Registration Report',
            'date' => date('m/d/Y'),
            'users' => $users,
        ];
        $pdf->setPaper('A4');
        $pdf->loadView('PDF.pending-user-list', $data);

        // Stream the generated PDF
        return $pdf->stream();
    }

    // public function generateProfilePDF($id)
    // {

    //     $users = User::find($id);
    //     $pdf = FacadePdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
    //     $data = [
    //         'title' => '59th DGCA Registration Report',
    //         'date' => date('m/d/Y'),
    //         'users' => $users,
    //     ];
    //     $pdf->setPaper('A4');
    //     $pdf->loadView('.PDF.delegate_profile', $data);
    //     // Stream the generated PDF
    //     return $pdf->stream();
    // }
}
