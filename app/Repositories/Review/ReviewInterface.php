<?php

declare(strict_types=1);

namespace App\Repositories\Review;

use App\Http\Requests\Review\ReviewStoreRequest;
use App\Http\Requests\Review\ReviewUpdateRequest;
use App\Models\Review;

interface ReviewInterface
{
    public function create(ReviewStoreRequest $request): ?array;

    public function update(ReviewUpdateRequest $request, Review $review): bool;

    public function delete(Review $review): void;
}
