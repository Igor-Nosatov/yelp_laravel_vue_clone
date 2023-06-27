<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Business\BusinessStoreRequest;
use App\Http\Requests\Business\BusinessUpdateRequest;
use App\Models\Business;
use App\Repositories\Business\BusinessInterface;
use Illuminate\Http\JsonResponse;

class BusinessController extends BaseController
{
    private $businessRepository;

    public function __construct(BusinessInterface $businessRepository)
    {
        $this->businessRepository = $businessRepository;
    }

    /**
     * Store a new business item.
     *
     * @param BusinessStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BusinessStoreRequest $request): JsonResponse
    {
        $response  = $this->businessRepository->store($request);
        return $this->successResponse($response, 'create new business item');
    }

    /**
     * Update a business item.
     *
     * @param BusinessUpdateRequest $request
     * @param Business $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BusinessUpdateRequest $request, Business $business): JsonResponse
    {
        $response  = $this->businessRepository->update($request, $business);
        return $this->successUpdateResponse($response, 'update business item');
    }

    /**
     * Delete a business item.
     *
     * @param Business $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Business $business): JsonResponse
    {
        $this->businessRepository->delete($business);
        return $this->deleteSuccessResponse('deleted successfully');
    }
}
