<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Review\ReviewStoreRequest;
use App\Http\Requests\Review\ReviewUpdateRequest;
use App\Repositories\Review\ReviewInterface;
use Illuminate\Http\JsonResponse;
use App\Models\Review;

class ReviewController extends BaseController
{
    private $reviewRepository;

    public function __construct(ReviewInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param ReviewStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ReviewStoreRequest $request): JsonResponse
    {
        $response = $this->reviewRepository->store($request);
        return $this->successResponse($response,'get all reviews successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Review $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Review $review): JsonResponse
    {
        $response = $this->reviewRepository->getById($review);
        return $this->successResponse($response,'get all reviews successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ReviewUpdateRequest $request
     * @param Review $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ReviewUpdateRequest $request, Review $review): JsonResponse
    {
        $response = $this->reviewRepository->update($request,$review);
        return $this->successResponse($response,'get all reviews successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Review $review
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Review $review): JsonResponse
    {
        $this->reviewRepository->delete($review);
        return $this->deleteSuccessResponse('deleted successfully');
    }
}
