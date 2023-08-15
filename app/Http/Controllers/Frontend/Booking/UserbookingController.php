<?php

namespace App\Http\Controllers\frontend\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\PackageBooking;
use App\Models\Preview;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userEmail = Auth::user()->email;
        $userId = Auth::user()->id;

        $tourBeenCount = Booking::where('email', $userEmail)->where('status', 'accepted')->count();
        $packagesBeenCount = PackageBooking::where('email', $userEmail)->where('status', 'accepted')->count();
        $totalReviews = Review::where('user_id', $userId)->count() + Preview::where('user_id', $userId)->count();

        $userbookings = Booking::where('email', $userEmail)
        ->where('status', 'accepted')
        ->join('tours', 'bookings.tour_id', '=', 'tours.id')
        ->select('bookings.*', 'tours.tour_name')
        ->orderBy('created_at', 'desc') // Sort by the 'created_at' column in descending order
        ->get();

        $userpbookings = PackageBooking::where('email', $userEmail)
        ->where('status', 'accepted')
        ->join('packages', 'package_bookings.package_id', '=', 'packages.id')
        ->select('package_bookings.*', 'packages.package_name')
        ->orderBy('created_at', 'desc') // Sort by the 'created_at' column in descending order
        ->get();

        // dd($userbookings);
        return view('frontend.website.bookings.userbookings', compact('tourBeenCount', 'userpbookings', 'userbookings', 'packagesBeenCount', 'totalReviews'));
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
