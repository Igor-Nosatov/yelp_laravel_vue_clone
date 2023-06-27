<?php

declare(strict_types=1);

namespace App\Repositories\Blog;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;

interface BlogInterface
{
    public function index(): mixed;

    public function show(Blog $blog): ?array;

    public function store(BlogCreateRequest $request): ?array;

    public function update(Blog $blog, BlogUpdateRequest $request):?array;

    public function delete(Blog $blog): ?bool;
}
