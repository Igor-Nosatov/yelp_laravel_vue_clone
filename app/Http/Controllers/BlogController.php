<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;
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

    public function store(BlogCreateRequest $request):mixed
    {
        $response =  $this->blogRepository->store($request);
        return $this->successResponse($response, 'create new post');
    }

    public function update(Blog $blog, BlogUpdateRequest $request):mixed
    {
        $response =  $this->blogRepository->update($blog, $request);
        return $this->successResponse($response, 'create new post');
    }

    public function delete(Blog $blog):mixed
    {

    }
}
