<?php

namespace App\Http\Controllers\Frontend\Offers;

use App\Http\Controllers\Controller;

use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::whereDoesntHave('bookings')->get();
        $packages = Package::whereDoesntHave('packagebookings')->get();
        $tourfilter = null;
        $packagefilter = null;
        return view('frontend.website.offers.offer', compact('tours', 'packages', 'tourfilter', 'packagefilter'));
    }

    public function viewTourDetail(Tour $tour){
        // dd($tour);
        return view('frontend.website.offers.tourdetail', compact('tour'));
    }

    public function viewPackageDetail(Package $package){
        return view('frontend.website.offers.packagedetail', compact('package'));
    }

    public function searchTour(Request $request)
    {
        $tourdestination = $request->input('tourdestination');

        if ($tourdestination) {
            $packagefilter = null;
            $tourfilter = Tour::where('destination', $tourdestination)->whereDoesntHave('bookings')->get();
        } else {
            $tourfilter = null;
            $packagefilter = null;
        }

        $tours = Tour::whereDoesntHave('bookings')->get();
        $packages = Package::whereDoesntHave('packagebookings')->get();

        return view('frontend.website.offers.offer', compact('tours', 'packages', 'packagefilter', 'tourfilter'));
    }

    public function searchTour2(Request $request)
    {
        $packagedestination = $request->input('packagedestination');

        if ($packagedestination) {
            $tourfilter = null;
            $packagefilter = Package::where('destination', $packagedestination)->whereDoesntHave('packagebookings')->get();
        } else {
            $tourfilter = null;
            $packagefilter = null;
        }

        $tours = Tour::whereDoesntHave('bookings')->get();
        $packages = Package::whereDoesntHave('packagebookings')->get();

        return view('frontend.website.offers.offer', compact('tours', 'packages','tourfilter', 'packagefilter'));
    }

    // public function searchTour(Request $request){
    //     // dd($request);
    //     $tourdestination = $request->input('tourdestination');
    //     // $tourname = Tour::where('destination', $tourdestination)->get();
    //     // dd($tourdestination);
    //     $tours = Tour::all();
    //     foreach ($tours as $tourfilter) {
    //         if ($tourfilter->destination == $tourdestination) {
    //             return redirect('offers.index', compact('tourfilter'));
    //         }
    //         else {
    //             // $tours = Tour::whereDoesntHave('bookings')->get();
    //             // $packages = Package::whereDoesntHave('packagebookings')->get();
    //             return redirect('offers.index');
    //         }
    //     }
    //     // return view('frontend.website.offers.offer', compact('tours', 'packages','tourname', 'tourdestination'));
    // }

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
