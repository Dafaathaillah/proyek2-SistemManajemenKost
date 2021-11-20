<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function landingPage()
    {
        return view('website.landing_page');
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
