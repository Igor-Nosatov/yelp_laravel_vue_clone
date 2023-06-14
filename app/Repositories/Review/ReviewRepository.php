<?php

declare(strict_types=1);

namespace App\Repositories\Review;

use App\Models\Review;

class ReviewRepository implements ReviewInterface
{
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }

    public function getById(int $id): ?array
    {
        // TODO: Implement getById() method.
    }

    public function create(array $data): ?array
    {
        return Review::create($data);
    }

    public function update(int $id, array $data): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        $review = Review::find($id);
        $review->delete();
    }
}
