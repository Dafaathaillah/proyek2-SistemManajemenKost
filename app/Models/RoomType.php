<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoomType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'currency',
    ];
    public static function index()
    {
        return RoomType::all();
    }

    public static function store(Request $request)
    {
        RoomType::create($request->all());
    }

    public static function edit(Request $request, RoomType $roomType)
    {
        $roomType->update($request->all());
    }
}
