<?php

namespace App\Http\Controllers;

use App\Models\BoardingHouse;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function landingPage()
    {
        $boardinghouses = BoardingHouse::all();
        return view('website.landing_page', compact('boardinghouses'));
    }

    public function bookingPage()
    {
        return view('website.booking_page');
    }

    public function detailPage()
    {
        return view('website.room_detail');
    }

    public function bookingForm()
    {
        return view('website.booking_form');
    }

    public function contactUs()
    {

    }
}
