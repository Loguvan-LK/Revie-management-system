<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Card;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::query();

        if ($request->has('card_id')) {
            $reviews->where('card_id', $request->card_id);
        }

        if ($request->has('date')) {
            $reviews->whereDate('date', $request->date);
        }

        $reviews = $reviews->get();

        return view('reviews.index', ['reviews' => $reviews]);
    }

    public function create()
    {
        $cards = Card::where('status', 'active')->get();
        
        return view('reviews.create', compact('cards'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'card_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review logged successfully.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }

    public function edit(Review $review)
    {
        $cards = Card::all();

        return view('reviews.edit', compact('review', 'cards'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'card_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string',
        ]);

        $review->update($request->all());

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }
}
