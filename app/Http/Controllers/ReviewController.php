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
}
