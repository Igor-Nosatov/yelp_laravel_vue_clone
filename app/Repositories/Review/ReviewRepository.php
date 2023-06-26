<?php

declare (strict_types = 1);

namespace App\Repositories\Review;

use App\Http\Requests\Review\ReviewStoreRequest;
use App\Http\Requests\Review\ReviewUpdateRequest;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewRepository implements ReviewInterface
{
    public function getAll():  ? array
    {
        return Review::where('user_id', Auth::id())->get()->toArray();
    }
    public function getById(Review $review) :  ? array
    {
        return Review::find($review)->toArray();
    }
    public function store(ReviewStoreRequest $request) :  ? array
    {
        $review = Review::create([
            'rating' => $request->rating,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'business_id' => $request->business_id,
        ]);

        return $review;
    }

    public function update(ReviewUpdateRequest $request, Review $review) :  ? bool
    {
        $review = Review::find($review);
        $review->update([
            'rating' => $request->rating,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'business_id' => $request->business_id,
        ]);
        return true;
    }

    public function delete(Review $review) :  ? bool
    {
        $review = Review::find($review);
        $review->delete();
        return true;
    }
}
