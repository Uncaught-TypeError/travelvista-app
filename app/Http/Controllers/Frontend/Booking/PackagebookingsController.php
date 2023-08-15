<?php

namespace App\Http\Controllers\Frontend\Booking;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackagebookingsController extends Controller
{
    public function packageIndex()
    {
        $packages = Package::whereDoesntHave('packagebookings')->get();

        $packagefilter = null;
        $mapDestination = null;
        $packageInfomation = null;
        return view('frontend.website.bookings.package.index', compact('packages', 'packageInfomation', 'mapDestination',  'packagefilter'));
    }

    public function searchPackage(Request $request){
        $packagedestination = $request->input('packagedestination');

        if ($packagedestination) {
            $packagefilter = Package::where('destination', $packagedestination)->whereDoesntHave('packagebookings')->get();
        } else {
            $packagefilter = null;
            $mapDestination = null;
            $packageInfomation = null;
        }
        $mapDestination = null;
        $packageInfomation = null;
        $packages = Package::whereDoesntHave('packagebookings')->get();

        return view('frontend.website.bookings.package.index', compact('packages', 'packageInfomation' ,'packagefilter', 'mapDestination'));
    }
    public function searchMap(Request $request)
    {
        $mapDestination = $request->input('mapDestination');

        if($mapDestination){
            $packageInfomation = Package::where('destination', $mapDestination)->whereDoesntHave('packagebookings')->get();
        }
        else{
            $packagefilter = null;
            $mapDestination = null;
            $packageInfomation = null;
        }
        $packagefilter = null;
        $packages = Package::whereDoesntHave('packagebookings')->get();

        return view('frontend.website.bookings.package.index', compact('packages', 'packagefilter', 'packageInfomation', 'mapDestination'));
    }

    public function stepOne(Package $package)
    {
        $packageDestination = $package->destination;
        $package_id = $package->id;
        Session::put('package_id', $package_id);
        $previousData = Session::get('validated_data', []);
        return view('frontend.website.bookings.package.step-one', compact('previousData', 'packageDestination') );
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
        return redirect()->route('pbookings.stepTwo');
        } else {
            return back()->with('danger', 'No available package for this destination');
        }
    }

    public function stepTwo()
    {
        $validatedData = Session::get('validated_data');
        $destination = $validatedData['destination'];
        $package_id = Session::get('package_id');

        $alreadyBookedPackageIds = PackageBooking::select('package_id')->groupBy('package_id')
        ->pluck('package_id')->all();

        $packages = Package::where('destination', $destination)
        ->whereNotIn('id', $alreadyBookedPackageIds)->get();

        return view('frontend.website.bookings.package.step-two', compact('packages','package_id'));
    }

    public function storestepTwo(Request $request)
    {
        // dd($request);
        $validatedTwo = $request->validate([
            'package_id' => 'required',
        ]);
        $validatedOne = Session::get('validated_data');
        $mergedPackage = array_merge($validatedOne, $validatedTwo);
        Session::put('merged_package', $mergedPackage);
        // PackageBooking::create($mergedData);
        // Session::forget('validated_data');
        return view('frontend.website.bookings.package.step-three', compact('mergedPackage'));
        // return redirect()->route('admin.packagebookings.index')->with('success', 'Package Booked successfully.');
    }

    public function storestepThree(Request $request)
    {

        $mergedPackage = Session::get('merged_package');
        // dd($mergedData);
        PackageBooking::create($mergedPackage);

        Session::forget('merged_package');
        Session::forget('package_id');
        Session::forget('validated_data');

        return view('frontend.success.success');
        // return redirect()->route('admin.bookings.index')->with('success', 'Booking Created successfully.');
    }
}
