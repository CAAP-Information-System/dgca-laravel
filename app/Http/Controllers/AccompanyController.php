<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AccompFlightInformation;
use Illuminate\Http\Request;

class AccompanyController extends Controller
{
    public function AccompanyFlightForm()
    {
        return view('flight_details.accomp_flight_form');
    }
    public function uploadFlightInformation(Request $request)
    {
        $request->validate([
            'salutation' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'passport_num' => 'required|string|max:255',
            'arrival_flight_num' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'arrival_time' => 'required|date_format:H:i',
            'departure_flight_num' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'departure_time' => 'required|date_format:H:i',
            'preferred_activity' => 'required|string', // Fix this line, replace > with =>
        ]);

        $accompany = new AccompFlightInformation();
        $accompany->fill($request->all());
        // Save the model to the database
        $accompany->save();

        return redirect()->route('welcome');
    }

}
