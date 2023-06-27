<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;
use App\Repositories\Blog\BlogInterface;
use Illuminate\Http\JsonResponse;

class BlogController extends BaseController
{
    private $blogRepository;

    public function __construct(BlogInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * Get all blog posts.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index():JsonResponse
    {
        $response = $this->blogRepository->index();
        return $this->successPaginationResponse(
            $response,
            'get blog posts  successfully'
        );
    }

    /**
     * Get a specific blog post by ID.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Blog $blog):JsonResponse
    {
        $response =  $this->blogRepository->show($blog);
        return $this->successResponse($response, 'get post by id successfully');
    }

    /**
     * Create a new blog post.
     *
     * @param BlogCreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BlogCreateRequest $request):JsonResponse
    {
        $response =  $this->blogRepository->store($request);
        return $this->successResponse($response, 'create new post successfully');
    }

    /**
     * Update a blog post.
     *
     * @param Blog $blog
     * @param BlogUpdateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Blog $blog, BlogUpdateRequest $request):JsonResponse
    {
        $response = $this->blogRepository->update($blog, $request);
        return $this->updateSuccessResponse($response, 'update post successfully');
    }

    /**
     * Delete a blog post.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Blog $blog):JsonResponse
    {
        $this->blogRepository->delete($blog);
        return $this->deleteSuccessResponse('deleted successfully');
    }
}



