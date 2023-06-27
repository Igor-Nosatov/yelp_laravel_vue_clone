<?php

declare(strict_types=1);

namespace App\Repositories\Account;

use App\Http\Requests\Account\AccountCreateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Models\Account;

interface AccountInterface
{
    public function getById(Account $account): ?array;

    public function store(AccountCreateRequest $request):?array;

    public function update(Account $account, AccountUpdateRequest $request): ?array;

}
