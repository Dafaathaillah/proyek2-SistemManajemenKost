<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'description',
        'room_area',
        'price',
        'currency',
    ];

    public static function getData()
    {
        return Room::all();
    }

    public static function store(Request $request) 
    {
        Room::create($request->all());
    }

    public static function edit(Request $request, Room $room)
    {
        $room->update($request->all());
    }
}
