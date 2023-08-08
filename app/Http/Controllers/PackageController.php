<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Package;
use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        $pbookings = PackageBooking::all();
        return view('admin.packages.index', compact('packages', 'pbookings'));
    }

    public function sort(Request $request)
    {
        // dd(request('sorting'));
        $sort = request('sorting', 'default');
        $packages = Package::query();
        $pbookings = PackageBooking::all();

        if ($sort === 'default')
        {
            $packages = Package::get();
        } elseif ($sort === 'alphasc')
        {
            $packages = Package::orderBy('package_name', 'asc')->get();
        } elseif ($sort === 'alphdesc')
        {
            $packages = Package::orderBy('package_name', 'desc')->get();
        } elseif ($sort === 'durasc')
        {
            $packages = Package::orderBy('duration', 'asc')->get();
        } elseif ($sort === 'duresc')
        {
            $packages = Package::orderBy('duration', 'desc')->get();
        } else
        {
            $packages = Package::get();
        }
        return view('admin.packages.index', compact('packages', 'pbookings'));
    }

    public function desMap(Package $package)
    {
        return view('admin.packages.destination-map', compact('package'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $previousPackage = Session::get('validated_package', []);
        return view('admin.packages.create', compact('previousPackage'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dump($request);
        $validated = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required|date|not_today_or_past',
            'num_person' => 'required',
            'destination' => 'required',
            'duration' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('public/packages');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            $validated['image'] = $imagePath;
        }

        Session::put('validated_package', $validated);
        Package::create($validated);
        Session::forget('validated_package');
        return redirect()->route('admin.packages.index')->with('success','Package Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return view('admin.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required|date|not_today_or_past',
            'num_person' => 'required',
            'destination' => 'required',
            'duration' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('public/packages');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            $validated['image'] = $imagePath;
        }
        $package->update($validated);
        return redirect()->route('admin.packages.index')->with('success','Package Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        if(!is_null($package->image)){
            Storage::delete($package->image);
        }
        $package->delete();

        return back()->with('success', 'Package deleted!');
    }

    public function viewImage(Package $package)
    {
        $packages = Package::find($package->id);
        return view('admin.packages.gallery', compact('packages'));
    }
}
