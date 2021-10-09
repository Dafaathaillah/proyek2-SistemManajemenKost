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
        'room_type_id',
        'description',
    ];

    /**
     * Get the roomType that owns the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
    /**
     * Get all of the files for the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasOne(File::class);
    }

    /**
     * Get all of the customers for the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public static function getData()
    {
        return Room::with('files')->get();
    }

    public static function getName($id)
    {
        return Room::find($id)->name;
    }

    public static function store(Request $request) 
    {
        $room = Room::create($request->all());
        return $room->id;
    }

    public static function edit(Request $request, Room $room)
    {
        $room->update($request->all());
    }
}
