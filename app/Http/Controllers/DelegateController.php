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
    public function convertAndDownloadCsv()
    {
        // Fetch delegate data from the database
        $delegates = DelegateFlightInformation::all();

        // Convert to XML
        $xml = new \SimpleXMLElement('<delegates></delegates>');
        foreach ($delegates as $delegate) {
            $delegateXml = $xml->addChild('delegate');
            $delegateXml->addChild('full_name', $delegate->first_name . ' ' . $delegate->last_name);
            $delegateXml->addChild('country', $delegate->country);
            $delegateXml->addChild('arrival_flight_num', $delegate->arrival_flight_num);
            $delegateXml->addChild('departure_flight_num', $delegate->departure_flight_num);
            $delegateXml->addChild('organization', optional($delegate->user)->organization ?? 'No organization');
        }

        // Save XML to a file
        $xmlFilePath = storage_path('app/delegates.xml');
        $xml->asXML($xmlFilePath);

        // Convert XML to CSV
        $xml = simplexml_load_file($xmlFilePath);
        $csvData = [];
        $csvData[] = ['Full Name', 'Country', 'Arrival Flight Num', 'Departure Flight Num', 'Organization'];
        foreach ($xml->delegate as $delegate) {
            $csvData[] = [
                (string)$delegate->full_name,
                (string)$delegate->country,
                (string)$delegate->arrival_flight_num,
                (string)$delegate->departure_flight_num,
                (string)$delegate->organization
            ];
        }

        // Save CSV to a file
        $csvFilePath = storage_path('app/delegates.csv');
        $csvFile = fopen($csvFilePath, 'w');
        foreach ($csvData as $row) {
            fputcsv($csvFile, $row);
        }
        fclose($csvFile);

        // Download CSV file
        return Response::download($csvFilePath, 'delegates.csv')->deleteFileAfterSend(true);
    }
}
