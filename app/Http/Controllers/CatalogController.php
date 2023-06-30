<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Business;
use App\Repositories\Catalog\CatalogInterface;
use Illuminate\Http\JsonResponse;

class CatalogController extends BaseController
{
    private $catalogRepository;

    public function __construct(CatalogInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }

    /**
     * Get all business catalog items.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $response = $this->catalogRepository->getAll();
        return $this->successPaginationResponse(
            $response,
            'get list of businessess successfully'
        );
    }

    /**
     * Get a specific business item from the catalog by ID.
     *
     * @param mixed $business
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $response =  $this->catalogRepository->getById($id);
        return $this->successResponse($response, 'get business item by id for catalog successfully');
    }
}
