<?php

declare(strict_types=1);

namespace App\Repositories\Business;

use App\Http\Requests\Business\BusinessStoreRequest;
use App\Http\Requests\Business\BusinessUpdateRequest;
use App\Models\Business;
use App\Repositories\Business\BusinessInterface;

class BusinessRepository implements BusinessInterface
{
    public function create(BusinessStoreRequest $request):?array
    {
        return Business::create($request->validated());
    }

    public function update(BusinessUpdateRequest $request, Business $business) : bool
    {
        return $business->update($request->validated());
    }

    public function delete(Business $business): void
    {
        $business->delete();
    }
}
