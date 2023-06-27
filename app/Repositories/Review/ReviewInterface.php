<?php

declare(strict_types=1);

namespace App\Repositories\Review;

use App\Http\Requests\Review\ReviewStoreRequest;
use App\Http\Requests\Review\ReviewUpdateRequest;
use App\Models\Review;

interface ReviewInterface
{
    public function getById(Review $review): ?array;
    public function store(ReviewStoreRequest $request): ?array;
    public function update(ReviewUpdateRequest $request, Review $review): ?array;
    public function delete(Review $review): ?bool;
}
