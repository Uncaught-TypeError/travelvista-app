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
        $tours = Tour::all();
        $packages = Package::all();
        return view('frontend.website.offers.offer', compact('tours', 'packages'));
    }

    public function viewTourDetail(Tour $tour)
    {
        // dd($tour);
        return view('frontend.website.offers.tourdetail', compact('tour'));
    }

    public function viewPackageDetail(Package $package)
    {
        return view('frontend.website.offers.packagedetail', compact('package'));
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
