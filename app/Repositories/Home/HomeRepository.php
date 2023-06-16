<?php

declare(strict_types=1);

namespace App\Repositories\Home;

use App\Models\Business;

class HomeRepository implements HomeInterface
{
    public function getAll(): array
    {
        return Business::with(['photos'])->limit(12)->get()->toArray();
    }

}
