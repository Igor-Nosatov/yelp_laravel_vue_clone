<?php

declare(strict_types=1);

namespace App\Repositories\Blog;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogRepository implements BlogInterface
{
    public function index(): mixed
    {
        return Blog::latest()->paginate(12);
    }

    public function show(Blog $blog): ?array
    {
        return Blog::find($blog)->toArray();
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
        return $blog;
    }

    public function update(Blog $blog, BlogUpdateRequest $request): ?array
    {
        $blog = Blog::find($blog);
        $blog = $blog->update([
            'profile_image'=> $request->profile_image,
            'phone_number'=> $request->phone_number,
            'user_id'=> Auth::id(),
        ]);
        return $blog ;
    }

    public function delete(Blog $blog): ?bool
    {
        $blog = Blog::find($blog);
        $blog->delete();
        return true;
    }
}
