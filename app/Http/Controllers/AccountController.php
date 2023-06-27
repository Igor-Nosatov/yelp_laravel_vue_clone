<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Account\AccountCreateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Models\Account;
use App\Repositories\Account\AccountInterface;
use Illuminate\Http\JsonResponse;

class AccountController extends BaseController
{
    private AccountInterface $accountRepository;

    /**
     * AccountController constructor.
     *
     * @param AccountInterface $accountRepository
     */
    public function __construct(AccountInterface $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * Show the specified account.
     *
     * @param Account $account
     * @return JsonResponse
     */
    public function show(Account $account): JsonResponse
    {
        $response = $this->accountRepository->getById($account);
        return $this->successResponse($response, 'Get account data for authorized user successfully');
    }

    /**
     * Store a new account.
     *
     * @param AccountCreateRequest $request
     * @return JsonResponse
     */
    public function store(AccountCreateRequest $request): JsonResponse
    {
        $response = $this->accountRepository->store($request);
        return $this->createResponse($response, 'Add account data for authorized user successfully');
    }

    /**
     * Update the specified account.
     *
     * @param Account $account
     * @param AccountUpdateRequest $request
     * @return JsonResponse
     */
    public function update(Account $account, AccountUpdateRequest $request): JsonResponse
    {
        $response = $this->accountRepository->update($account, $request);
        return $this->updateSuccessResponse($response, 'Update account data for authorized user successfully');
    }
}
