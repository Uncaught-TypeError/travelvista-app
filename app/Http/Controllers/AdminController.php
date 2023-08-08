<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\PackageBooking;
use App\Models\Tour;
use App\Models\TourBooking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        $packagebookings = PackageBooking::all();
        $tours = Tour::all();
        $destinationCounts = $tours->groupBy('destination')->map->count();
        return view('admin.index', compact('bookings', 'tours', 'packagebookings',
        'destinationCounts'));
    }

    public function viewAllTourImages()
    {
        $tours = Tour::all();
        return view('admin.tours.view-all-images', compact('tours'));
    }

    public function viewAllPackageImages()
    {
        $packages = Package::all();
        return view('admin.packages.view-all-images', compact('packages'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

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
