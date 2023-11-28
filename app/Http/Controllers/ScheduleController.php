<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function day1()
    {
        // Load the view for Day 1
        return view('main.schedules.day1');
    }

    public function day2()
    {
        // Load the view for Day 2
        return view('schedules.day2');
    }

    public function day3()
    {
        // Load the view for Day 3
        return view('schedules.day3');
    }
}
