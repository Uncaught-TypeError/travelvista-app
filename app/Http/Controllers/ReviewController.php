<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Preview;
use App\Models\ReplyReview;
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
        $filterStatus = request('filterStatus', 'all');

        if($filterStatus == 'all')
        {
            $reviews = Review::all();
            $previews = Preview::all();
        }else if($filterStatus == 'replied')
        {
            $reviews = Review::where('status', 'replied')->get();
            $previews = Preview::where('status', 'replied')->get();

        }elseif ($filterStatus === 'notReplied')
        {
            $reviews = Review::where('status', 'notReplied')->get();
            $previews = Preview::where('status', 'notReplied')->get();
        }
        return view('admin.reviews.index', compact('reviews', 'previews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tours = Tour::all();
        return view('admin.reviews.create', compact('tours'));
    }
    public function create2()
    {
        $packages = Package::all();
        return view('admin.reviews.create2', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required',
            'comment' => 'required_without:rating', // Comment is required if rating is not present
            'tour_id' => 'required',
            'rating' => 'required_without:comment', // Rating is required if comment is not present
        ]);
        // dd($validated);
        //Logged-in User ID
        $validated['user_id'] = auth()->user()->id;

        Review::create($validated);

        return redirect()->route('admin.reviews.index')->with('success', 'Review created!');
    }

    public function store2(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'user_id' => 'required',
            'comment' => 'required_without:rating', // Comment is required if rating is not present
            'package_id' => 'required',
            'rating' => 'required_without:comment', // Rating is required if comment is not present
        ]);
        // dd($validated);
        //Logged-in User ID
        $validated['user_id'] = auth()->user()->id;


        // dd($validated);
        Preview::create($validated);
        return redirect()->route('admin.reviews.index')->with('success', 'Review created!');
    }

    public function manageReview(){
        $reviews = Review::all();
        $previews = Preview::all();
        return view('admin.reviews.manage', compact('reviews','previews'));
    }

    public function replyReview(Review $reviews){
        $replies = ReplyReview::all();
        return view('admin.reviews.reply',compact('reviews', 'replies'));
    }

    public function replyPreview(Preview $previews)
    {
        $replies = ReplyReview::all();
        return view('admin.reviews.reply2',compact('previews', 'replies'));
    }

    public function submitReply(Request $request){
        // dd($request);
        $validated = $request->validate([
            'reply' => 'required',
            'review_id' => 'required',
            'preview_id' => 'nullable',
        ]);

        $replyReview = new ReplyReview([
            'review_id' => $validated['review_id'],
            'reply' => $validated['reply'],
        ]);
        $replyReview->save();

        $review = Review::find($validated['review_id']);
        if ($review) {
            $review->status = 'replied';
            $review->save();
        }

        return redirect()->route('admin.reviews.manage')->with('success', 'Replied!');
    }

    public function submitReply2(Request $request){
        // dd($request);
        $validated = $request->validate([
            'reply' => 'required',
            'review_id' => 'nullable',
            'preview_id' => 'required',
        ]);

        $replyPreview = new ReplyReview([
            'preview_id' => $validated['preview_id'],
            'reply' => $validated['reply'],
        ]);

        $preview = Preview::find($validated['preview_id']);
        if ($preview) {
            $preview->status = 'replied';
            $preview->save();
        }

        $replyPreview->save();
        return redirect()->route('admin.reviews.manage')->with('success', 'Replied!');
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
