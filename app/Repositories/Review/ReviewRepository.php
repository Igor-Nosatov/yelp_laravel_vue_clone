<?php

declare (strict_types = 1);

namespace App\Repositories\Review;

use App\Http\Requests\Review\ReviewStoreRequest;
use App\Http\Requests\Review\ReviewUpdateRequest;
use App\Models\Review;

class ReviewRepository implements ReviewInterface
{
    public function create(ReviewStoreRequest $request):  ? array
    {
        return Review::create($request->validated());
    }

    public function update(ReviewUpdateRequest $request, Review $review) : bool
    {
        return $review->update($request->validated());
    }

    public function delete(Review $review): void
    {
        $review->delete();
    }
}
