<?php

namespace App\Http\Controllers\Frontend\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function galleryTourIndex(Tour $tour)
    {
        return view('frontend.website.gallery.tourgallery', compact('tour'));
    }

    public function galleryPackageIndex(Package $package)
    {
        return view('frontend.website.gallery.packagegallery', compact('package'));
    }

    public function viewAllTourImage(){
        $tours = Tour::all();
        return view('frontend.website.gallery.alltourgallery', compact('tours'));
    }
    public function viewAllPackageImage(){
        $packages = Package::all();
        return view('frontend.website.gallery.allpackagegallery', compact('packages'));
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
