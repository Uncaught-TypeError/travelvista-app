<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\PackageBooking;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageBookingController extends Controller
{
    public function index()
    {
        $filterStatus = request('filterStatus', 'all');
        $packages = Package::all();

        if($filterStatus == 'all'){
            $pbookings = PackageBooking::all();
        }
        elseif($filterStatus == 'accepted'){
            $pbookings = PackageBooking::where('status', 'accepted')->get();
        }
        elseif($filterStatus == 'cancelled'){
            $pbookings = PackageBooking::where('status', 'cancelled')->get();
        }
        elseif($filterStatus == 'pending'){
            $pbookings = PackageBooking::where('status', 'pending')->get();
        }
        return view('admin.packagebookings.index', compact('pbookings', 'packages'));
    }

    public function show(PackageBooking $packagebooking)
    {
        $packages = Package::all();
        $users = User::all();
        return view('admin.packagebookings.show', compact('packagebooking', 'packages', 'users'));
    }

    public function destroy(PackageBooking $packagebooking)
    {
        $packagebooking->delete();
        return back()->with('success', 'Package Booking Deleted');
    }

    public function acceptBooking(PackageBooking $packagebooking)
    {
        $packagebooking->status = 'accepted';
        $packagebooking->save();

        return redirect()->back()->with('success', 'Package Booking has been accepted.');
    }

    public function cancelBooking(PackageBooking $packagebooking)
    {
        $packagebooking->status = 'cancelled';
        $packagebooking->save();

        return redirect()->back()->with('success', 'Booking has been cancelled.');
    }

    public function stepOne()
    {
        $previousData = Session::get('validated_data', []);
        return view('admin.packagebookings.step-one', compact('previousData') );
    }

    public function storestepOne(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'email' => 'required',
            'destination' => 'required',
        ]);

        Session::put('validated_data', $validated);
        $packages = Package::all();
        $bookedDestination = PackageBooking::where('destination', $validated['destination'])->get();

        if ($packages->isEmpty()) {
            return back()->with('danger', 'There are no packages!');
        }

        $hasAvailablePackage = false;
        foreach ($packages as $package) {
            if ($request->destination == $package->destination && $bookedDestination->count() == 0) {
                $hasAvailablePackage = true;
                break;
            }
        }

        if ($hasAvailablePackage) {
        return redirect()->route('admin.packagebookings.stepTwo');
        } else {
            return back()->with('danger', 'No available package for this destination');
        }
    }

    public function stepTwo()
    {
        $validatedData = Session::get('validated_data');
        $destination = $validatedData['destination'];

        $alreadyBookedPackageIds = PackageBooking::select('package_id')->groupBy('package_id')
        ->pluck('package_id')->all();

        $packages = Package::where('destination', $destination)
        ->whereNotIn('id', $alreadyBookedPackageIds)->get();

        return view('admin.packagebookings.step-two', compact('packages'));
    }

    public function storestepTwo(Request $request)
    {
        // dd($request);
        $validatedTwo = $request->validate([
            'package_id' => 'required',
        ]);
        $validatedOne = Session::get('validated_data');
        $mergedData = array_merge($validatedOne, $validatedTwo);

        PackageBooking::create($mergedData);
        Session::forget('validated_data');

        return redirect()->route('admin.packagebookings.index')->with('success', 'Package Booked successfully.');
    }



}
