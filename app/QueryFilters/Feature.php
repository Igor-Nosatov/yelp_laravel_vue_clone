<?php

declare(strict_types=1);

namespace App\QueryFilters;

class Feature extends Filter
{
    protected function applyFilters($builder)
    {
        return $builder->where('feature',request($this->filterName()));
    }
}
