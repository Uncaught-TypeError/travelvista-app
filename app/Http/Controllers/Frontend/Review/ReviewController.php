<?php

namespace App\Http\Controllers\Frontend\Review;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Preview;
use App\Models\Review;
use App\Models\Tour;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createReview(String $id)
    {
        // $tours = Tour::all();
        // dd($id);
        $tour = Tour::where('id', $id)->first();
        if($tour){
            $tour_id = $tour->id;
            $tour_name = $tour->tour_name;
        }
        // dd($tour_name);
        return view('frontend.review.treview', compact('tour_id', 'tour_name'));
    }

    public function createReview2(String $id)
    {
        $package = Package::where('id', $id)->first();
        if($package){
            $package_id = $package->id;
            $package_name = $package->package_name;
        }

        return view('frontend.review.preview', compact('package_id', 'package_name'));
    }

    public function storeReview(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required',
            'comment' => 'required_without:rating', // Comment is required if rating is not present
            'tour_id' => 'required',
            'rating' => 'required_without:comment', // Rating is required if comment is not present
        ]);
        //Logged-in User ID
        $validated['user_id'] = auth()->user()->id;
        // dd($validated);

        Review::create($validated);

        return redirect()->route('userbookings.index')->with('success', 'Review created!');
    }

    public function storeReview2(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required',
            'comment' => 'required_without:rating', // Comment is required if rating is not present
            'package_id' => 'required',
            'rating' => 'required_without:comment', // Rating is required if comment is not present
        ]);
        //Logged-in User ID
        $validated['user_id'] = auth()->user()->id;
        // dd($validated);

        Preview::create($validated);

        return redirect()->route('userbookings.index')->with('success', 'Review created!');
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
