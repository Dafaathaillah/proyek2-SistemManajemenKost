<?php

namespace App\Http\Controllers;

use App\Models\Room;
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
        $rooms = Room::getData()->where('status', 'available');
        return view('website.booking_page', compact('rooms'));
    }

    public function detailPage($id)
    {
        $room = Room::findOrFail($id);
        return view('website.room_detail', compact('room'));
    }

    public function bookingForm()
    {
        return view('website.booking_form');
    }

    public function contactUs()
    {

    }
}
