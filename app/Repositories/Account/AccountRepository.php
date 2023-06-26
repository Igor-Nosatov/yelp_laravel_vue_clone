<?php

declare(strict_types=1);

namespace App\Repositories\Account;

use App\Http\Requests\Account\AccountCreateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Models\Account;
use App\Repositories\Account\AccountInterface;
use Illuminate\Support\Facades\Auth;

class  AccountRepository implements AccountInterface
{
    public function getById(int $id): ?array
    {
        return Account::where('user_id', Auth::id());
    }

    public function store(AccountCreateRequest $request):?bool
    {
        Account::create( [
            'profile_image'=> $request->profile_image,
            'user_id'=> Auth::id(),
            'phone_number'=> $request->phone_number,
        ]);
        return true;
    }

    public function update(Account $account, AccountUpdateRequest $request):?bool
    {
        $account = Account::find($account);
        $account->update([
            'profile_image'=> $request->profile_image,
            'phone_number'=> $request->phone_number,
            'user_id'=> Auth::id(),
        ]);
        return true;
    }

    public function delete(Account $account): ?bool
    {
        $account->delete();
        return true;
    }
}
