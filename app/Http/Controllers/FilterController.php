<?php

namespace App\Http\Controllers;

use App\Repositories\Filter\FilterInterface;

class FilterController extends Controller
{
    private $filterRepository;

    public function __construct(FilterInterface $filterRepository)
    {
        $this->filterRepository = $filterRepository;
    }
    public function index()
    {
        //
    }
}
