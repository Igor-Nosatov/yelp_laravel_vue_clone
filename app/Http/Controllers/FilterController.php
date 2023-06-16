<?php

namespace App\Http\Controllers;

use App\Repositories\Filter\FilterInterface;

class FilterController extends BaseController
{
    private $filterRepository;

    public function __construct(FilterInterface $filterRepository)
    {
        $this->filterRepository = $filterRepository;
    }
    public function index()
    {
        $response =  $this->filterRepository->getAll();
        return $this->successResponse($response, 'get filter listing');
    }
}
