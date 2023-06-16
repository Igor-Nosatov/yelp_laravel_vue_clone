<?php

declare(strict_types=1);

namespace App\Repositories\Auth;

use App\Http\Requests\Auth\UserRegisterRequest;
use App\Http\Requests\Auth\UserUpdateRequest;
use App\Models\User;

interface AuthInterface
{
    public function signUp(UserRegisterRequest $request): array;

    public function  login(string $email, string  $password): array|null;
    public function updateUser($id, UserUpdateRequest $request): User;
}
