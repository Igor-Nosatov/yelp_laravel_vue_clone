<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Blog\BlogInterface;

class BlogController extends BaseController
{
    private $blogRepository;

    public function __construct(BlogInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    public function index():mixed
    {
        $response = $this->blogRepository->getAll();
        return $this->successPaginationResponse(
            $response,
            'get blog post'
        );
    }

    public function show(int $id):mixed
    {
        $response =  $this->blogRepository->getById($id);
        return $this->successResponse($response, 'get post by id');
    }
}
