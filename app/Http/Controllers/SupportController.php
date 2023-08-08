<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function readSupport()
    {
        $supports = Support::all();
        $users = User::all();
        return view('admin.support.read', compact('supports','users'));
    }

    public function writeSupport(Support $replies, User $senderId)
    {
        $users = User::all();
        $supports = Support::all();
        return view('admin.support.write', compact('users','replies', 'supports', 'senderId'));
    }

    public function storeSupport(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'sender_id'=>'required',
            'tour_id'=>'required',
            'reply'=>'required',
        ]);
        // dd($validated);
        Support::create($validated);
        return redirect()->route('admin.tours.index');


    }
}
