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
        $validCountries = [
            "AUSTRALIA", "BANGLADESH", "BHUTAN", "BRUNEI DARUSSALAM", "CAMBODIA", "CANADA", "CHINA",
            "CHINA – HONG KONG SAR", "CHINA – MACAO SAR", "COOK ISLANDS", "DEMOCRATIC PEOPLE’S REPUBLIC OF KOREA",
            "FIJI", "FRANCE", "FRENCH POLYNESIA", "INDIA", "INDONESIA", "JAPAN", "KIRIBATI",
            "LAO PEOPLE’S DEMOCRATIC REPUBLIC", "MALAYSIA", "MALDIVES", "MARSHALL ISLANDS",
            "MICRONESIA (FEDERATED STATES OF)", "MONGOLIA", "NAURU", "NEPAL", "NEW CALEDONIA", "NEW ZEALAND",
            "NIUE", "PAKISTAN", "PALAU", "PAPUA NEW GUINEA", "PHILIPPINES", "REPUBLIC OF KOREA", "SAMOA",
            "SINGAPORE", "SOLOMON ISLANDS", "SRI LANKA", "THAILAND", "TIMOR-LESTE", "TONGA", "TUVALU",
            "UNITED KINGDOM", "UNITED STATES OF AMERICA", "VANUATU", "VIET NAM", "WALLIS AND FUTUNA ISLANDS", "AAPA", "ACI", "CANSO", "EASA", "EUROCONTROL", "IATA", "IBAC", "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT", "ICCAIA", "IFALPA", "IFATCA", "IFATSEA", "PASO"

        ];
        $validOrganizations = [
            "AAPA", "ACI", "CANSO", "EASA", "EUROCONTROL", "IATA", "IBAC", "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT", "ICCAIA", "IFALPA", "IFATCA", "IFATSEA", "PASO"
        ];


        return Validator::make($data, [
            // Authentication
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            // Personal Details
            'username' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'organization' => ['required', 'string', Rule::in($validCountries)],
            'designation' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255', Rule::in($validCountries)],
            // 'gender' => ['required', 'string', Rule::in(['Male', 'Female', 'Rather not say'])],
            'privacy' => ['required', 'string'],
            'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:9999'],
            'salutation' => ['required', 'string', 'max:255'],
            'passport_num' => ['required', 'string'],
            'address' => ['required', 'string'],
            'telephone' => ['nullable', 'string'],
            'mobile' => ['nullable', 'string'],
            'passport_photo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:9999'],
            'is_HOD' => ['required', 'string', 'in:Yes,No'],

            // Conference Details
            'conference_role' => ['required', 'string', 'max:255'],
            'badge_name' => ['nullable', 'string'],

            // Accommodations & Preferences
            'airport_destination' => ['nullable', 'string', 'max:255'],
            'hotel_reco' => ['nullable', 'string', 'max:255'],
            'otherHotel' => ['nullable', 'string'],
            'attire_size' => ['nullable', 'string'],
            'attire_special_req' => ['nullable', 'string'],
            'preferred_activity' => ['nullable', 'string', 'max:255'],
            'dietary_restrictions' => ['nullable', 'array'],
            'dietary_restrictions.*' => ['string', 'max:255'],
            'dietary_special_req' => ['nullable', 'string'],

            // Accompanying Person/Spouse
            'has_spouse' => ['nullable', 'string'],
            'accomp_fname' => ['nullable', 'array'],
            'accomp_fname.*' => ['nullable', 'string'],
            'accomp_lname' => ['nullable', 'array'],
            'accomp_lname.*' => ['nullable', 'string'],
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
        $dietary_restrictions = json_encode($data['dietary_restrictions']);
        $accomp_fname = json_encode($data['accomp_fname']);
        $accomp_lname = json_encode($data['accomp_lname']);
        return User::create([
            'username' => $data['username'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'organization' => $data['organization'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'gender' => $data['gender'],
            'designation' => $data['designation'],
            'country' => $data['country'],
            'conference_role' => $data['conference_role'],
            'privacy' => $data['privacy'] ? 'Approved' : 'Unapproved',
            'profile_image' => $profilefileName, // Save only the file name
            'airport_destination' => $data['airport_destination'],
            'attire_size' => $data['attire_size'],
            'has_spouse' => $data['has_spouse'],
            'salutation' => $data['salutation'],
            'passport_num' => $data['passport_num'],
            'address' => $data['address'],
            'telephone' => $data['telephone'],
            'mobile' => $data['mobile'],
            'passport_photo' => $passportfileName, // Save only the file namey
            'badge_name' => $data['badge_name'],
            'hotel_reco' => $data['hotel_reco'],
            'attire_special_req' => $data['attire_special_req'],
            'dietary_restrictions' => $dietary_restrictions,
            'dietary_special_req' => $data['dietary_special_req'],
            'otherHotel' => $data['otherHotel'],
            'accomp_fname' => $accomp_fname,
            'accomp_lname' => $accomp_lname,
            'is_HOD' => $data['is_HOD'],

        ]);
    }
}
