<?php

declare(strict_types=1);

namespace App\Repositories\Catalog;

use App\Models\Business;

class CatalogRepository implements CatalogInterface
{
    public function getAll():mixed
    {
        return Business::filtered()
        ->with(['photos', 'reviews','amenities','categories','features','suggests'])
        ->withCount(['photos', 'reviews'])
        ->paginate(12);

    }

    public function getById(Business $business): ?array
    {
        return  Business::find($business)->toArray();
    }
}
