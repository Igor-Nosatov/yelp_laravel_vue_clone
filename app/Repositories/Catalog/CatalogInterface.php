<?php

declare(strict_types=1);

namespace App\Repositories;

interface CatalogInterface
{
    public function getAll(): array;

    public function getById(int $id): ?array;

    public function create(array $data): ?array;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
