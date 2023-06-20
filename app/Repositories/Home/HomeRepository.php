<?php

declare(strict_types=1);

namespace App\Repositories\Home;

use App\Models\Business;

class HomeRepository implements HomeInterface
{
    public function getAll(): array
    {
        $data = Business::withCount(['photos', 'reviews'])
            ->limit(6)
            ->get(['id', 'address']);

        $data->transform(function ($item) {
            $reviews = $item->reviews;
            $averageRating = $reviews->avg('rating');

            return [
                'id' => $item->id,
                'address' => $item->address,
                'photos_count' => $item->photos_count,
                'reviews_count' => $item->reviews_count,
                'photos' => $item->photos,
                'reviews' => $reviews,
                'average_rating' => round($averageRating),
            ];
        });

        return $data->toArray();
    }
}
