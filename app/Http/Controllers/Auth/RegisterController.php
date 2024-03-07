<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            // Authentication
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            // Personal Details
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'organization' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', Rule::in(['Male', 'Female', 'Rather not say'])],
            'privacy' => ['required', 'string'],
            'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'salutation' => ['required', 'string', 'max:255'],
            'passport_num' => ['required', 'string'],
            'address' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'mobile' => ['nullable', 'string'],
            'passport_photo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'approval_doc' => ['required', 'file', 'mimes:pdf', 'max:2048'],


            // Conference Details
            'conference_role' => ['required', 'string', 'max:255'],
            'badge_name' => ['required', 'string'],

            // Flight Details
            // Arrival
            'arrival_flight_num' => ['required', 'string'],
            'arrival_date' => ['required', 'date'],
            'arrival_time' => ['required', 'date_format:H:i'],
            // Departure
            'departure_flight_num' => ['required', 'string'],
            'departure_date' => ['required', 'date'],
            'departure_time' => ['required', 'date_format:H:i'],

            // Accommodations & Preferences
            'airport_destination' => ['nullable', 'string', 'max:255'],
            'hotel_reco' => ['nullable', 'string', 'max:255'],
            'otherHotel' => ['nullable', 'string'],
            'neck' => ['nullable', 'integer'],
            'shoulder' => ['nullable', 'integer'],
            'attire_special_req' => ['required', 'string'],
            'preferred_activity' => ['nullable', 'string', 'max:255'],
            'dietary_restrictions' => ['nullable', 'string', 'max:255'],
            'dietary_special_req' => ['nullable', 'string'],

            // Accompanying Person/Spouse
            'has_spouse' => ['nullable', 'string'],
            'accomp_name' => ['nullable', 'string'],
            'accomp_name' => ['nullable', 'string'],
            'accomp_preferred_activity' => ['nullable', 'string', 'max:255'],
        ]);
    }


    protected function create(array $data)
    {
        $profileImagePath = null;
        $passportImagePath = null;
        $approvalDocPath = null;

        if (isset($data['profile_image'])) {
            $fullName = $data['first_name'] . '_' . $data['last_name'];
            $profilefileName = $fullName . '.jpg';
            $profileImagePath = $data['profile_image']->storeAs('profile_images', $profilefileName, 'public');
        }

        if (isset($data['passport_photo'])) {
            $fullName = $data['first_name'] . '_' . $data['last_name'];
            $passportfileName = $fullName . '.jpg';
            $passportImagePath = $data['passport_photo']->storeAs('passport_photos', $passportfileName, 'public');
        }
        if (isset($data['approval_doc'])) {
            $fullName = $data['first_name'] . '_' . $data['last_name'];
            $approval_docName = $fullName . '.pdf';
            $approvalDocPath = $data['approval_doc']->storeAs('approval_docs', $approval_docName, 'public');
        }
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'organization' => $data['organization'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'designation' => $data['designation'],
            'country' => $data['country'],
            'conference_role' => $data['conference_role'],
            'privacy' => $data['privacy'] ? 'Approved' : 'Unapproved',
            'profile_image' => $profilefileName, // Save only the file name
            'airport_destination' => $data['airport_destination'],
            'neck' => $data['neck'],
            'shoulder' => $data['shoulder'],
            'preferred_activity' => $data['preferred_activity'],
            'has_spouse' => $data['has_spouse'],
            // Add the new fields below
            'salutation' => $data['salutation'],
            'passport_num' => $data['passport_num'],
            'address' => $data['address'],
            'telephone' => $data['telephone'],
            'mobile' => $data['mobile'],
            'passport_photo' => $passportfileName, // Save only the file namey
            'badge_name' => $data['badge_name'],
            'arrival_flight_num' => $data['arrival_flight_num'],
            'arrival_date' => $data['arrival_date'],
            'arrival_time' => $data['arrival_time'],
            'departure_flight_num' => $data['departure_flight_num'],
            'departure_date' => $data['departure_date'],
            'departure_time' => $data['departure_time'],
            'hotel_reco' => $data['hotel_reco'],
            'attire_special_req' => $data['attire_special_req'],
            'dietary_restrictions' => $data['dietary_restrictions'],
            'dietary_special_req' => $data['dietary_special_req'],
            'otherHotel' => $data['otherHotel'],
            'accomp_name' => $data['accomp_name'],
            'accomp_country' => $data['accomp_country'],
            'accomp_preferred_activity' => $data['accomp_preferred_activity'],
            'approval_doc' => $approval_docName,

        ]);
    }
}
