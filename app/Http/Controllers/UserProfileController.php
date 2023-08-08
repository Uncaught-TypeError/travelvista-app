<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function profileUpdate(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'phone' => 'nullable|string',
            'age' => 'nullable|integer',
            'city' => 'nullable|string',
            'country' => 'nullable|string',
            'occupation' => 'nullable|string',
            'address' => 'nullable|string',
            'description' => 'nullable|string|max:500',
        ]);

        //Check if the user has a profile already
        $userProfile = UserProfile::where('user_id', $validated['user_id'])->first();

        //If the user has profile, update the record
        if($userProfile){
            $userProfile->update($validated);
        }else{
            UserProfile::create($validated);
        }

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function profileUpdate2(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'required|image',
        ]);

        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/profilepic');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            // $filename = $image->getClientOriginalName();
            $filename = str_replace('public/', '', $imagePath);
            // Storage::move($imagePath, 'public/profilepic/' . $filename);
            // Update the image path in the $validated array
            $validated['image'] = $filename;
        }
        // dd($validated);

        //Check if the user has a profile already
        $userProfile = UserProfile::where('user_id', $validated['user_id'])->first();

        //If the user has profile, update the record
        if($userProfile){
            $userProfile->update($validated);
            return redirect()->back()->with('success', 'Profile Picture Updated successfully!');
        }else{
            UserProfile::create($validated);
            return redirect()->back()->with('success', 'Profile Picture Created successfully!');
        }
    }
    public function profileUpdate3(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'bgimage' => 'required|image',
        ]);

        // dd($validated);
        if ($request->hasFile('bgimage')) {
            $image = $request->file('bgimage');
            $imagePath = $image->store('public/bgpic');
            $image = Image::make(storage_path('app/' . $imagePath))->fit(800, 600);
            $image->save();

            $filename = str_replace('public/', '', $imagePath);
            // Update the image path in the $validated array
            $validated['bgimage'] = $filename;
        }
        // dd($validated);

        //Check if the user has a profile already
        $userProfile = UserProfile::where('user_id', $validated['user_id'])->first();

        //If the user has profile, update the record
        if($userProfile){
            $userProfile->update($validated);
            return redirect()->back()->with('success', 'Background Picture Updated successfully!');
        }else{
            UserProfile::create($validated);
            return redirect()->back()->with('success', 'Background Picture Created successfully!');
        }
    }

    public function profileEdit()
    {
        $userId = Auth::user()->id;

        $userProfile = UserProfile::where('user_id', $userId)->first();

        return view('frontend.user.profile.index', compact('userProfile'));
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
