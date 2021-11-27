<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use App\Models\BoardingHouse;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

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

    public function bookingForm($id)
    {
        $rooms = Room::findOrFail($id);
        $boardinghouses = BoardingHouse::all();
        return view('website.booking_form', compact('rooms', 'boardinghouses'));
    }

    public function storeBookingForm(Request $request)
    {    

        $boardinghouses = BoardingHouse::all();

        Booking::store($request);
        Alert::toast('Booking telah berhasil.', 'success');
        return view('website.landing_page', compact('boardinghouses'));
    }

    public function contactUs()
    {

    }
}
