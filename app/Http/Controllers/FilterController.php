<?php

namespace App\Http\Controllers;

use App\Repositories\Filter\FilterInterface;
use Illuminate\Http\JsonResponse;

class FilterController extends BaseController
{
    private $filterRepository;

    public function __construct(FilterInterface $filterRepository)
    {
        $this->filterRepository = $filterRepository;
    }

    /**
     * Get all filters.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $response = $this->filterRepository->getAll();
        return $this->successResponse($response, 'get filter listing');
    }
}
