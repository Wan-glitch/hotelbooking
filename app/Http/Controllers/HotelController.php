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
        // Debug statement
        // dd($hotels);

        return view('home', [
            'hotels' => $hotels
        ]);
    }



    public function showHotelPage($id) {
        $hotelData = Hotel::find($id);

        // Pass the fetched data to the view
        return view('hotel', ['hotelData' => $hotelData]);



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
