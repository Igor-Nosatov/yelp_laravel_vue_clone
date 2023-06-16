<?php

declare(strict_types=1);

namespace App\Repositories\Account;

use App\Repositories\Account\AccountInterface;

class  AccountRepository implements AccountInterface
{
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
    }

    public function getById(int $id): ?array
    {
        // TODO: Implement getById() method.
    }

    public function create(array $data): ?array
    {
        // TODO: Implement create() method.
    }

    public function update(int $id, array $data): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }
}
