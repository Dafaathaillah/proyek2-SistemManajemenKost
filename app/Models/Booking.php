<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Customer;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'check_in_date',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public static function index()
    {
        return Booking::all();
    }

    public static function store(Request $request)
    {
        $customer = Customer::create([
            'id_number' => $request->id_number,
            'room_id' => $request->room_id,
            'gender' => $request->gender,
            'address' => $request->address,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        Booking::create([
            'customer_id' => $customer->id,
            'check_in_date' => $request->check_in_date,
        ]);

    }

    public static function updateStatus($booking)
    {
        if ($booking->status == 'pending') {
            Booking::updateStatusAvailable($booking->customer_id);
            $booking->update([
                'status' => 'pending',
            ]);
            
        } else if ($booking->status == 'reject') {
            Booking::updateStatusAvailable($booking->customer_id);
            $booking->update([
                'status' => 'reject',
            ]);
            
        } else if ($booking->status == 'expired') {
            Booking::updateStatusAvailable($booking->customer_id);
            $booking->update([
                'status' => 'expired',
            ]);
            
        } else {
            Booking::updateStatusNotAvailable($booking->customer_id);
            $booking->update([
                'status' => 'accept',
            ]);
        }
    }

}
