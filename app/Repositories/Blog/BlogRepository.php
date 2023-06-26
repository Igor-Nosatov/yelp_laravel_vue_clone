<?php

declare(strict_types=1);

namespace App\Repositories\Blog;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

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

    public function store(BlogCreateRequest $request): ?array
    {
        $blog = Blog::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'image'=> $request->image,
            'user_id'=> Auth::id(),
            'topic_id'=> $request->topic_id,
        ]);
        return  $blog;
    }

    public function update(Blog $blog, BlogUpdateRequest $request): ?bool
    {
        $blog = Blog::find($blog);
        $blog->update([
            'profile_image'=> $request->profile_image,
            'phone_number'=> $request->phone_number,
            'user_id'=> Auth::id(),
        ]);
        return true;
    }

    public function delete(Blog $blog): ?bool
    {
        $blog = Blog::find($blog);
        $blog->delete();
        return true;
    }
}
