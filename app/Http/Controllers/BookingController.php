<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filterStatus = request('filterStatus', 'all');
        $tours = Tour::all();

        if($filterStatus == 'all'){
            $bookings = Booking::all();
        }
        else if($filterStatus == 'accepted'){
            $bookings = Booking::where('status', 'accepted')->get();
        }elseif ($filterStatus === 'cancelled') {
            $bookings = Booking::where('status', 'cancelled')->get();
        }elseif ($filterStatus === 'pending') {
            $bookings = Booking::where('status', 'pending')->get();
        }
        return view('admin.bookings.index', compact('bookings', 'tours'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return back()->with('success', 'Booking Deleted');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function createOne()
    {
        // $tours = Tour::all();
        // $min_date = Carbon::today();
        // $max_date = Carbon::now()->addWeek();
        $previousData = Session::get('validated_data', []);
        return view('admin.bookings.createOne', compact('previousData'));
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

        Session::put('validated_data', $validated);

        return to_route('admin.bookings.createTwo');
    }

    public function createTwo()
    {
        $validatedData = Session::get('validated_data');
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

        return view('admin.bookings.createTwo', compact('tours', 'validatedData'));
    }

    public function storecreateTwo(Request $request)
    {
        $validatedTwo = $request->validate([
            'tour_id' => 'required',
        ]);

        $validatedOne = Session::get('validated_data');

        // $phone = $validatedOne['phone'];
        // $address = $validatedOne['address'];
        // User::create([
        //     'phone' => $phone,
        //     'address' => $address,
        // ]);

        $mergedData = array_merge($validatedOne, $validatedTwo);
        Booking::create($mergedData);
        Session::forget('validated_data');

        return redirect()->route('admin.bookings.index')->with('success', 'Booking Created successfully.');
    }

    public function acceptBooking(Booking $booking)
    {
        $booking->status = 'accepted';
        $booking->save();

        return redirect()->back()->with('success', 'Booking has been accepted.');
    }

    public function cancelBooking(Booking $booking)
    {
        $booking->status = 'cancelled';
        $booking->save();

        return redirect()->back()->with('success', 'Booking has been cancelled.');
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
    public function show(Booking $booking)
    {
        $tours = Tour::all();
        $users = User::all();
        return view('admin.bookings.show', compact('booking', 'tours','users'));
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
}
