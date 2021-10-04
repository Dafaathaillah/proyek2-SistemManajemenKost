<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class RoomTypeController extends Controller
{
    public function index()
    {
        return view('room_types.index', ['roomTypes' => RoomType::index()]);
    }

    public function create()
    {
        return view('room_types.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);
    
        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }
        
        RoomType::store($request);
        Alert::toast('Type Kamar baru berhasil dibuat.', 'success');
        return redirect()->route('roomTypes.index');
    }
    public function show(RoomType $roomType)
    {
        //
    }

    public function edit(RoomType $roomType)
    {
        return view('room_types.edit', ['roomType' => $roomType]);
    }

    public function update(Request $request, RoomType $roomType)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required|regex:/^[0-9]+$/'
        ]);
    
        if ($validator->fails()) {
            Alert::toast($validator->messages()->all()[0], 'error');
            return redirect()->back()->withInput();
        }

        RoomType::edit($request, $roomType);
        Alert::toast('Type Kamar berhasil diedit.', 'success');
        return redirect()->route('roomTypes.index');
    }

    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        Alert::toast('Type Kamar berhasil dihapus.', 'success');
        return redirect()->route('roomTypes.index');
    }
}
