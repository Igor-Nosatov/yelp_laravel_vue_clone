<?php

declare(strict_types=1);

namespace App\Repositories\Business;

use App\Http\Requests\Business\BusinessStoreRequest;
use App\Http\Requests\Business\BusinessUpdateRequest;
use App\Models\Business;

interface BusinessInterface
{
    public function create(BusinessStoreRequest $request): ?array;

    public function update(BusinessUpdateRequest $request, Business $business): bool;

    public function delete(Business $business): void;
}
