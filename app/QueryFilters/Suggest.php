<?php

declare(strict_types=1);

namespace App\QueryFilters;

class Suggest extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('suggest',request($this->filterName()));
    }
}
