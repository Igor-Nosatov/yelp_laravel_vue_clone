<?php

declare(strict_types=1);

namespace App\QueryFilters;

class Category extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('category',request($this->filterName()));
    }
}
