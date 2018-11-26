<?php

namespace App\Http\Controllers;

use App\User;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create']);
    }

    public function create(Request $request, User $host)
    {
        $review = Review::create([
            'user_id' => $host->id,
            'rate' => $request->rate,
            'body' => $request->body,
            'owner_id' => auth()->id(),
        ]);

        return $review;
    }

    public function edit(Request $request, Review $review)
    {
        if (auth()->id() != $review->owner_id) {
            return abort(403);
        }
        
        $review->rate = $request->rate;
        $review->body = $request->body;

        return $review;
    }

    public function destroy(Request $request, Review $review)
    {
        if (auth()->id() != $review->owner_id) {
            return abort(403);
        }
        $review->delete();
        return $review;
    }
}
