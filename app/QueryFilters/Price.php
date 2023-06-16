<?php

declare(strict_types=1);

namespace App\QueryFilters;

class Price extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('price',request($this->filterName()));
    }
}
