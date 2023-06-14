<?php

declare(strict_types=1);

namespace App\Repositories\Business;

use App\Models\Business;
use App\Repositories\Bussiness\BussinessInterface;

class BusinessRepository implements BussinessInterface
{
    public function getAll(): array
    {
        return Business::latest()->paginate(12);
    }

    public function getById(int $id): ?array
    {
        return Business::find($id);
    }

    public function create(array $data): ?array
    {
        return Business::create($data);
    }

    public function update(int $id, array $data): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        $business = Business::find($id);
        $business->delete();
    }
}
