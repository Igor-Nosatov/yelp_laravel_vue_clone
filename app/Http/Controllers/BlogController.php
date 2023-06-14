<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Blog\BlogInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogRepository;

    public function __construct(BlogInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
