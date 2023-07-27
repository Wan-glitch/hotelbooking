<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display everything or onething from hotels
     */
    public function index()
    {
        //SELECT*FROM ALL
        $hotels = Hotel::all();

        //select one hotel
        //$hotels = Hotel::where('name','Hotel Melaka')->get();

        return view('hotels', [
            'hotels' => $hotels
        ]);
    }

    public function showBookingPage($hotelid)
    {
        // Fetch the hotel record from the database based on the $hotelid
        $hotel = Hotel::find($hotelid);
        echo $hotelid;

        // Add any additional logic you need to prepare data for the booking page

        // Pass the hotel data to the booking view
        return view('hotels');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
