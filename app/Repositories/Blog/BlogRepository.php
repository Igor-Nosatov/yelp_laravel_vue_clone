<?php

declare(strict_types=1);

namespace App\Repositories\Blog;

use App\Models\Blog;

class BlogRepository implements BlogInterface
{
    public function getAll(): mixed
    {
        return Blog::latest()->paginate(12);
    }

    public function getById(int $id): ?array
    {
        return Blog::find($id)->toArray();
    }

    public function create(array $data): ?array
    {
        return Blog::create($data);
    }

    // public function update(int $id, array $data): bool
    // {
    //     // TODO: Implement update() method.
    // }

    // public function delete(int $id): void
    // {
    //     $blog = Blog::find($id);
    //     $blog->delete();
    // }
}
