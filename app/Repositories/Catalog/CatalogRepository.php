<?php

declare(strict_types=1);

namespace App\Repositories\Catalog;

use App\Models\Business;

class CatalogRepository implements CatalogInterface
{
    public function getAll():mixed
    {
        return Business::filtered()->paginate(12);
    }

    public function getById(int $id): ?array
    {
        return  Business::find($id)->toArray();
    }
}
