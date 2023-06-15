<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Home\HomeInterface;

class HomeController extends BaseController
{
    private $homeRepository;

    public function __construct(HomeInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }
    public function index()
    {
        //
    }

}
