<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number',
        'user_id',
        'room_id',
        'gender',
        'address',
        'phone_number',
        'whatsapp_number',
    ];

    /**
     * Get the user that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the room that owns the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public static function getData()
    {
        return Customer::all();
    }

    public static function store(Request $request, $id)
    {
        Customer::create([
            'id_number' => $request->id_number,
            'user_id' => $id,
            'room_id' => $request->room_id,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
        ]);
    }

    public static function edit(Request $request, Customer $customer)
    {
        $customer->update([
            'id_number' => $request->id_number,
            'room_id' => $request->room_id,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'whatsapp_number' => $request->whatsapp_number,
        ]);
    }
}