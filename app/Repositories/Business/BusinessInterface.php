<?php

declare(strict_types=1);

namespace App\Repositories\Business;

use App\Http\Requests\Business\BusinessStoreRequest;
use App\Http\Requests\Business\BusinessUpdateRequest;
use App\Models\Business;

interface BusinessInterface
{
    public function store(BusinessStoreRequest $request): ?array;

    public function update(BusinessUpdateRequest $request, Business $business): ?array;

    public function delete(Business $business): ?bool;
}
