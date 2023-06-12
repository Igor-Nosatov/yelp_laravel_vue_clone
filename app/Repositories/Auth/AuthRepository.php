<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

class AuthRepository implements AuthInterface
{
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

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
