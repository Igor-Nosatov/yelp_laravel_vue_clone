<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Home\HomeInterface;
use Illuminate\Http\JsonResponse;

class HomeController extends BaseController
{
    private $homeRepository;

    public function __construct(HomeInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * Get data for the start page.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $response = $this->homeRepository->getAll();
        return $this->successResponse(
            $response,
            'get data for start page'
        );
    }
}
