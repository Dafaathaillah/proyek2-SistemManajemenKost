<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public static function index()
    {
        return Facility::all();
    }

    public static function store(Request $request)
    {
        Facility::create($request->all());
    }

    public static function edit(Request $request, Facility $facility)
    {
        $facility->update($request->all());
    }
}
