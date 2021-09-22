<?php

namespace App\Http\Controllers;

use App\Models\BoardingHouse;
use Illuminate\Http\Request;

class BoardingHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boarding_houses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BoardingHouse  $boardingHouse
     * @return \Illuminate\Http\Response
     */
    public function show(BoardingHouse $boardingHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BoardingHouse  $boardingHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(BoardingHouse $boardingHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BoardingHouse  $boardingHouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardingHouse $boardingHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoardingHouse  $boardingHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardingHouse $boardingHouse)
    {
        //
    }
}