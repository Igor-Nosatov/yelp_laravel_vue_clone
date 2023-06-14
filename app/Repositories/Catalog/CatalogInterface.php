<?php

declare(strict_types=1);

namespace App\Repositories\Catalog;

interface CatalogInterface
{
    public function getAll(): array;

    public function getById(int $id): ?array;

}
