<?php

declare(strict_types=1);

namespace App\Repositories\Account;

use App\Http\Requests\Account\AccountCreateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Models\Account;
use App\Repositories\Account\AccountInterface;
use Illuminate\Support\Facades\Auth;

class AccountRepository implements AccountInterface
{
    public function getById(Account $account): ?array
    {
        return Account::where('user_id', Auth::id())->get()->toArray;
    }

    public function store(AccountCreateRequest $request):?array
    {
        $account  = Account::create( [
            'profile_image'=> $request->profile_image,
            'user_id'=> Auth::id(),
            'phone_number'=> $request->phone_number,
        ]);
        return $account;
    }

    public function update(Account $account, AccountUpdateRequest $request):?array
    {
        $account = Account::find($account);
        $account = $account->update([
            'profile_image'=> $request->profile_image,
            'phone_number'=> $request->phone_number,
            'user_id'=> Auth::id(),
        ]);
        return $account;
    }

}
