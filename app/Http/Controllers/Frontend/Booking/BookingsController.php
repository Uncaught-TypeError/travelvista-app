<?php

namespace App\Http\Controllers\Frontend\Booking;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.website.bookings.bookings');
    }

    public function tourIndex()
    {
        $tours = Tour::whereDoesntHave('bookings')->get();
        $tourfilter = null;
        $packagefilter = null;
        return view('frontend.website.bookings.tour.index', compact('tours', 'tourfilter', 'packagefilter'));
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
