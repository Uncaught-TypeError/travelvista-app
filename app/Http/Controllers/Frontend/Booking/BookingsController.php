<?php

namespace App\Http\Controllers\Frontend\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $mapDestination = null;
        $tourInfomation = null;
        return view('frontend.website.bookings.tour.index', compact('tours', 'tourInfomation', 'mapDestination', 'tourfilter'));
    }

    public function searchTour(Request $request){
        $tourdestination = $request->input('tourdestination');

        if ($tourdestination) {
            $tourfilter = Tour::where('destination', $tourdestination)->whereDoesntHave('bookings')->get();
        } else {
            $tourfilter = null;
            $mapDestination = null;
            $tourInfomation = null;
        }
        $mapDestination = null;
        $tourInfomation = null;
        $tours = Tour::whereDoesntHave('bookings')->get();

        return view('frontend.website.bookings.tour.index', compact('tours', 'tourInfomation', 'tourfilter', 'mapDestination'));
    }

    public function searchMap(Request $request)
    {
        $mapDestination = $request->input('mapDestination');

        if($mapDestination){
            $tourInfomation = Tour::where('destination', $mapDestination)->whereDoesntHave('bookings')->get();
        }
        else{
            $tourfilter = null;
            $mapDestination = null;
            $tourInfomation = null;
        }
        $tourfilter = null;
        $tours = Tour::whereDoesntHave('bookings')->get();

        return view('frontend.website.bookings.tour.index', compact('tours', 'tourfilter', 'tourInfomation', 'mapDestination'));
    }

    public function createOne(Tour $tour)
    {
        // dd($tour);
        // dd($tourDestination);
        $tourDestination = $tour->destination;
        $tour_id = $tour->id;
        // dd($tour_id);
        Session::put('tour_id', $tour_id);
        $authenticatedUser = auth()->user();
        if ($authenticatedUser) {
            $previousData = Session::get('validated_data', []);
            return view('frontend.website.bookings.tour.createOne', compact('previousData', 'authenticatedUser', 'tourDestination'));
        } else {
            return view('frontend.website.bookings.tour.createOne', compact('previousData','tourDestination'));
        }
    }


    public function storecreateOne(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'date' => 'required|date|not_today_or_past',
            'num_person' => 'required',
            'destination'=> 'required',
        ]);

        // dd($validated);

        Session::put('validated_data', $validated);

        return to_route('bookings.tour.createTwo');
    }

    public function createTwo()
    {
        $validatedData = Session::get('validated_data');
        $tour_id = Session::get('tour_id');
        // dd($tour_id);
        $destination = $validatedData['destination'];

        $alreadyBookedTourIds = Booking::select('tour_id')
        ->groupBy('tour_id')
        ->pluck('tour_id')
        ->all();

        // $tours = Tour::where('destination', $destination)->get();
        $tours = Tour::where('destination', $destination)
        ->whereNotIn('id', $alreadyBookedTourIds)
        ->get();

        if ($tours->isEmpty()){
            return back()->with('danger', "No available tours for the selected destination!");
        }

        return view('frontend.website.bookings.tour.createTwo', compact('tours','tour_id', 'validatedData'));
    }

    public function storecreateTwo(Request $request)
    {
        $validatedTwo = $request->validate([
            'tour_id' => 'required',
        ]);

        $validatedOne = Session::get('validated_data');

        $mergedData = array_merge($validatedOne, $validatedTwo);
        // dd($mergedData);
        Session::put('merged_data', $mergedData);
        // Booking::create($mergedData);
        // Session::forget('validated_data');
        return view('frontend.website.bookings.tour.createThree', compact('mergedData'));
        // return redirect()->route('admin.bookings.index')->with('success', 'Booking Created successfully.');
    }


    public function storecreateThree(Request $request)
    {

        $mergedData = Session::get('merged_data');
        // dd($mergedData);
        Booking::create($mergedData);

        Session::forget('merged_data');
        Session::forget('tour_id');
        Session::forget('validated_data');

        return view('frontend.success.success');
        // return redirect()->route('admin.bookings.index')->with('success', 'Booking Created successfully.');
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sorting', 'default');
        // dd($sort);
        $tourQuery = Tour::whereDoesntHave('bookings');

        if ($sort === 'alphasc') {
            $tourQuery->orderBy('tour_name', 'asc');
        } elseif ($sort === 'alphdesc') {
            $tourQuery->orderBy('tour_name', 'desc');
        } elseif ($sort === 'durasc') {
            $tourQuery->orderBy('duration', 'asc');
        } elseif ($sort === 'duresc') {
            $tourQuery->orderBy('duration', 'desc');
        }

        $tours = $tourQuery->get();

        $tourfilter = null;
        $mapDestination = null;
        $tourInfomation = null;

        return view('frontend.website.bookings.tour.index', compact('tours', 'tourInfomation', 'mapDestination', 'tourfilter'));
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
