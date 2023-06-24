<?php

declare(strict_types=1);

namespace App\Repositories\Filter;

use App\Models\Amenity;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Suggest;
use Illuminate\Support\Facades\Cache;

class FilterRepository implements FilterInterface
{
    public function getAll(): array
    {
        if (Cache::has('options_data')) {
            return Cache::get('options_data');
        }

        $options = [];
        $options =[
            'category'=> Category::get()->toArray(),
            'features'=> Feature::get()->toArray(),
            'suggest'=> Suggest::get()->toArray(),
            'amenities'=> Amenity::get()->toArray(),
            'price'=> ['Low', 'Average','High', 'Luxury'],
        ];

        Cache::put('options_data', $options, $seconds = 2592000);//30 days
        return $options;
    }

}
