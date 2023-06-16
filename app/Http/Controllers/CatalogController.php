<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Catalog\CatalogInterface;

class CatalogController extends BaseController
{
    private $catalogRepository;

    public function __construct(CatalogInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }
    public function index():mixed
    {
        $response = $this->catalogRepository->getAll();
        return $this->successPaginationResponse(
            $response,
            'get business catalog'
        );
    }

    public function show(int $id):mixed
    {
        $response =  $this->catalogRepository->getById($id);
        return $this->successResponse($response, 'get business item by id from catalog');
    }
}
