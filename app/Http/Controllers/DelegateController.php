<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DelegateFlightInformation;
use Illuminate\Http\Request;

class DelegateController extends Controller
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

    public function DelegateFlightForm()
    {
        return view('flight_details.dg_flight_form');
    }
    public function uploadFlightInformation(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'arrival_flight_num' => 'required|string|max:255',
            'arrival_date' => 'required|date',
            'arrival_time' => 'required|date_format:H:i',
            'departure_flight_num' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'departure_time' => 'required|date_format:H:i',
        ]);

        $delegate = new DelegateFlightInformation();
        $delegate->fill($request->all());
        // Save the model to the database
        $delegate->save();

        return redirect()->route('welcome');
    }
}
