<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tours = Tour::all();
        // $bookings = Booking::all();
        // return view('admin.tours.index', compact('tours', 'bookings'));
        $status = request('status', 'all');
        $bookings = Booking::all();

        if ($status === 'all') {
            $tours = Tour::all();
        } elseif ($status === 'available') {
            // Get tours with bookings (active tours)
            $tours = Tour::whereDoesntHave('bookings')->get();
        } elseif ($status === 'unavailable') {
            // Get tours without bookings (inactive tours)
            $tours = Tour::whereHas('bookings')->get();
        }

        return view('admin.tours.index', compact('tours','bookings'));
    }

    public function desMap(Tour $tour)
    {
        return view('admin.tours.destination-map', compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tour_name' => 'required',
            'destination' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/tours');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            $validated['image'] = $imagePath;
        }

        Tour::create($validated);
        return redirect()->route('admin.tours.index')->with('success','Tour Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        return view('admin.tours.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $validated = $request->validate([
            'tour_name' => 'required',
            'destination' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/tours');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            $validated['image'] = $imagePath;
        }

        $tour->update($validated);
        return redirect()->route('admin.tours.index')->with('success', 'Tour Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if(!is_null($tour->image)){
            Storage::delete($tour->image);
        }

        $tour->delete();

        return back()->with('success', 'Tour Deleted!');
    }

    public function viewImage(Tour $tour){

        $tours = Tour::find($tour->id);
        // dd($tours);
        return view('admin.tours.gallery', compact('tours'));
    }
}
